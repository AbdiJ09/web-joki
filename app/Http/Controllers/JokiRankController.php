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
        $randomOrderId = rand(100000, 999999);
        while (JokiRank::where('id_pesanan', $randomOrderId)->exists()) {
            // $timestamp = now()->format("YmdHis");
            $randomOrderId = rand(100000, 999999);
        }
        return view('service.rank', compact('ranks', 'promos', 'murmers', 'randomOrderId'));
    }
    public function payment(Request $request)
    {
        $id_pesanan = $request->id_pesanan;

        // Periksa apakah id_pesanan sudah ada dalam database
        $existingOrder = JokiRank::where('id_pesanan', $id_pesanan)->first();

        if ($existingOrder) {
            // id_pesanan sudah ada, lakukan tindakan yang sesuai, misalnya tampilkan pesan kesalahan
            return redirect('order/joki-rank')->with("warning", "Pesanan telah dibuat");
        }
        $payment_expiry = Carbon::now('Asia/Jakarta')->addMinutes(1); // Set waktu dengan zona waktu WIB


        $dataOrderRank = [
            "id_pesanan" => $request->id_pesanan,
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

        $customer = JokiRank::where('id_pesanan', $id_pesanan)->first();
        $paymentExpiry = Carbon::parse($customer->payment_expiry, 'Asia/Jakarta');
        $currentTime = Carbon::now('Asia/Jakarta');

        if ($currentTime > $paymentExpiry) {
            JokiRank::where('id_pesanan', $id_pesanan)->delete();
            // Pesanan telah kadaluwarsa, tampilkan notifikasi
            return redirect('/order/joki-rank')->with('warningg', 'pesanan expired');
        }
        return view('components.proccesOrder', [
            "customer" => $customer
        ]);
    }
}
