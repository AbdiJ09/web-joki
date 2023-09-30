<?php

namespace App\Http\Controllers;

use App\Models\ServiceClassic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceClassicController extends Controller
{
    public function show()
    {
        $classic = DB::table('select_classics')->get();
        $invoiceCode = uniqid();
        while (ServiceClassic::where('invoice_code', $invoiceCode)->exists()) {
            $invoiceCode = uniqid();
        }

        return view('service.classic', compact('classic', 'invoiceCode'));
    }
}
