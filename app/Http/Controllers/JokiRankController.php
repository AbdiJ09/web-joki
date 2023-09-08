<?php

namespace App\Http\Controllers;

use App\Models\JokiRank;
use Illuminate\Http\Request;
use App\Models\RankSelection;
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
        // dd($request)->all();
        // $validatedData = $request->validate([
        //     'email' => 'required|email|max:255',
        //     'password' => 'required|max:255',
        //     'id_and_nick' => 'required',
        //     'login_via' => 'required',
        //     'select_joki' => 'required',
        //     'star_order' => 'required',
        //     'whatsapp' => 'required',
        //     'payment' => 'required',
        // ]);

        $dataOrderRank = [
            "id_pesanan" => $request->id_pesanan,
            "email" => $request->email,
            "password" => $request->password,
            "id_and_nick" => $request->NickName,
            "login_via" => $request->LoginVia,
            "select_joki" => $request->Nominal,
            "star_order" => $request->order,
            "whatsapp" => $request->whatsapp,
            "payment" => $request->payment
        ];


        JokiRank::create($dataOrderRank);

        return redirect()->route('process.orderan', ["id_pesanan" => $request->id_pesanan]);
    }
    public function processOrderan($id_pesanan)
    {
        $customer = JokiRank::where('id_pesanan', $id_pesanan)->first();
        return view('components.proccesOrder', [
            "customer" => $customer
        ]);
    }
}
