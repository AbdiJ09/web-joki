<?php

namespace App\Http\Controllers;

use App\Models\JokiRank;
use App\Models\PaymentDetail;
use Illuminate\Http\Request;
use App\Models\RankSelection;
// use Illuminate\Support\Carbon;
use Carbon\Carbon; // Import kelas Carbon
use Illuminate\Support\Facades\DB;

class JokiRankController extends Controller
{
    public function show()
    {
        $ranks = DB::table('rank_selections')->get();
        $promos = DB::table('promos')->get();
        $murmers = DB::table('murmers')->get();
        // $timestamp = now()->format('YmdHis');
        $invoiceCode = uniqid();
        while (JokiRank::where('invoice_code', $invoiceCode)->exists()) {
            // $timestamp = now()->format("YmdHis");
            $invoiceCode = uniqid();
        }
        return view('service.rank', compact('ranks', 'promos', 'murmers', 'invoiceCode'));
    }
    public function payment(Request $request)
    {
        $id_pesanan = $request->id_pesanan;

        // Periksa apakah id_pesanan sudah ada dalam database
        $existingOrder = JokiRank::where('invoice_code', $id_pesanan)->first();

        if ($existingOrder) {
            // id_pesanan sudah ada, lakukan tindakan yang sesuai, misalnya tampilkan pesan kesalahan
            return redirect('order/joki-rank')->with("warning", "Pesanan telah dibuat");
        }
        $payment_expiry = Carbon::now('Asia/Jakarta')->addMinutes(30); // Set waktu dengan zona waktu WIB


        $dataOrderRank = [
            "invoice_code" => $request->id_pesanan,
            "email" => $request->email,
            "password" => $request->password,
            "id_and_nick" => $request->NickName,
            "login_via" => $request->LoginVia,
            "select_joki" => $request->Nominal,
            "star_order" => $request->order,
            "whatsapp" => $request->whatsapp,
            "payment" => $request->payment,
            "price" => $request->price,
            "payment_expiry" => $payment_expiry->toDateTimeString()
        ];
        $JokiRank = JokiRank::create($dataOrderRank);
        if ($request->payment === "DANA" || $request->payment === "GOPAY") {
            $paymentDetails = new PaymentDetail([
                'dana_number' => ($request->payment === 'DANA') ? '088210673563' : null,
                'ovo_number' => ($request->payment === "GOPAY") ? '088210673563' : null
            ]);
            $JokiRank->PaymentDetails()->save($paymentDetails);
        }
        return redirect()->route('process.orderan', ["id_pesanan" => $request->id_pesanan]);
    }
    public function processOrderan($id_pesanan)
    {

        $customer = JokiRank::where('invoice_code', $id_pesanan)->first();
        $paymentExpiry = Carbon::parse($customer->payment_expiry, 'Asia/Jakarta');
        $currentTime = Carbon::now('Asia/Jakarta');

        if ($currentTime > $paymentExpiry) {
            JokiRank::where('invoice_code', $id_pesanan)->delete();
            // Pesanan telah kadaluwarsa, tampilkan notifikasi
            return redirect('/order/joki-rank')->with('warningg', 'pesanan expired');
        }
        return view('components.proccesOrder', [
            "customer" => $customer
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
        }

        // Ubah status pesanan menjadi "paid"
        $pesanan->status = 'paid';

        // Simpan perubahan pesanan
        $pesanan->update($transaksi);
        // Redirect atau kirim respons sesuai kebutuhan Anda
        return response()->json(['success' => true, 'message' => 'Pembayaran berhasil']);
    }
}
