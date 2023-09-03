<?php

namespace App\Http\Controllers;

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
}
