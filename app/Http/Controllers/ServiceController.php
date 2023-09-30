<?php

namespace App\Http\Controllers;

use App\Models\JokiRank;
use App\Models\Service;
use App\Models\ServiceClassic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\View;

class ServiceController extends Controller
{

    public function show($slug)
    {

        $service = Service::where('slug', $slug)->first();
        $service->popularitas += 1;
        $service->save();
        if ($service->slug == 'joki-rank') {

            $ranks = DB::table('rank_selections')->get();
            $promos = DB::table('promos')->get();
            $murmers = DB::table('murmers')->get();
            $invoiceCode = uniqid();
            while (JokiRank::where('invoice_code', $invoiceCode)->exists()) {
                $invoiceCode = uniqid();
            }
            return view('service.rank', compact('ranks', 'promos', 'murmers', 'invoiceCode'));
        } elseif ($service->slug == 'joki-classic') {
            $classic = DB::table('select_classics')->get();
            $invoiceCode = uniqid();
            while (ServiceClassic::where('invoice_code', $invoiceCode)->exists()) {
                $invoiceCode = uniqid();
            }

            return view('service.classic', compact('classic', 'invoiceCode'));
        } elseif ($service->slug == 'joki-gendong') {
            return View('service.gendong', compact('service'));
        }
    }
}
