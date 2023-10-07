<?php

namespace App\Http\Controllers;

use App\Models\JokiRank;
use App\Models\PaymentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\RankSelection;
// use Illuminate\Support\Carbon;
use Carbon\Carbon; // Import kelas Carbon
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class JokiRankController extends Controller
{
    const TIMEZONE = "Asia/Jakarta";
    public function payment(Request $request)
    {
        self::TIMEZONE;
        $id_pesanan = $request->id_pesanan;

        // Periksa apakah id_pesanan sudah ada dalam database
        $existingOrder = JokiRank::where('invoice_code', $id_pesanan)->first();

        if ($existingOrder) {
            // id_pesanan sudah ada, lakukan tindakan yang sesuai, misalnya tampilkan pesan kesalahan
            return redirect('order/joki-rank')->with("warning", "Pesanan telah dibuat");
        }
        $payment_expiry = Carbon::now(SELF::TIMEZONE)->addMinutes(30); // Set waktu dengan zona waktu WIB



        if ($request->payment === "GOPAY") {
            $payment = new JokiRank;
            $payment->invoice_code = $request->id_pesanan;
            $payment->email = $request->email;
            $payment->password = $request->password;
            $payment->id_and_nick = $request->NickName;
            $payment->login_via = $request->LoginVia;
            $payment->select_joki = $request->Nominal;
            $payment->star_order = $request->order;
            $payment->whatsapp = $request->whatsapp;
            $payment->price = $request->price;
            $payment->payment = $request->payment;
            $payment->status = "pending";
            $payment->payment_expiry = $payment_expiry->toDateTimeString();
            $payment->save();
            $params = array(
                'transaction_details' => array(
                    'order_id' => $payment->id,
                    'gross_amount' => $request->price,
                ),
                'payment_type' => 'gopay',
                'gopay' => array(
                    'enable_callback' => true,                // optional
                    'callback_url' => 'someapps://callback'   // optional
                )
            );
            $auth = base64_encode(config('midtrans.server_key'));
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => "Basic $auth",

            ])->post('https://api.sandbox.midtrans.com/v2/charge', $params);
            $response = json_decode($response);

            $generateQrCodeAction = collect($response->actions)->firstWhere('name', 'generate-qr-code');
            $deplinkAction = collect($response->actions)->firstWhere('name', 'deeplink-redirect');

            $qrCodeUrl = $generateQrCodeAction ? $generateQrCodeAction->url : "default_qr_code_url";
            $deepLinkUrl = $deplinkAction ? $deplinkAction->url : "default_deep_link_url";



            return redirect()->route('process.orderan', ["id_pesanan" => $request->id_pesanan, "qrCode" => $qrCodeUrl, "deepLink" => $deepLinkUrl]);
        }
    }
    public function processOrderan($id_pesanan, Request $request)
    {

        $callbackUrl = $request->qrCode;
        $deepLinkUrol = $request->deepLink;

        $customer = JokiRank::where('invoice_code', $id_pesanan)->first();
        $paymentExpiry = Carbon::parse($customer->payment_expiry, self::TIMEZONE);
        $currentTime = Carbon::now('Asia/Jakarta');

        if ($currentTime > $paymentExpiry) {
            JokiRank::where('invoice_code', $id_pesanan)->delete();
            // Pesanan telah kadaluwarsa, tampilkan notifikasi
            return redirect('/services/joki-rank')->with('warningg', 'Pesanan telah kadaluwarsa');
        }

        return view('components.proccesOrder', [
            "customer" => $customer,
            "barcodeImage" => $callbackUrl,
            "deepLink" => $deepLinkUrol
        ]);
    }

    public function proccessTransaksi(Request $request, string $id_pesanan)
    {

        $transaksi = $request->validate([
            'image' => 'image'
        ]);

        // Cari pesanan berdasarkan ID
        $pesanan = JokiRank::where('invoice_code', $id_pesanan)->firstOrFail();

        if ($request->file('image')->isValid()) {
            // Simpan path gambar jika ada
            $imagePath = $request->file('image')->store('bukti-pesanan');
            $transaksi['image'] = $imagePath;

            // Simpan path gambar ke dalam kolom yang sesuai di tabel JokiRank
            $pesanan->image = $imagePath;
            $pesanan->status = 'paid';
            $pesanan->update($transaksi);
            return response()->json(['success' => true, 'message' => 'Pembayaran berhasil']);
        }
        return response()->json(['success' => false, 'message' => 'Pembayaran gagal']);
    }
}
