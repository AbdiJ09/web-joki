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

        return view('service.rank', compact('ranks', 'promos', 'murmers'));
    }

    public function payment(Request $request)
    {
        // dd($request)->all();
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
            'id_and_nick' => 'required',
            'login_via' => 'required',
            'select_joki' => 'required',
            'star_order' => 'required',
            'whatsapp' => 'required',
            'payment' => 'required',
        ]);

        JokiRank::create($validatedData);

        return redirect('/order/joki-rank/');
    }
}
