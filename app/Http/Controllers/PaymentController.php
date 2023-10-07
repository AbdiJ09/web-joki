<?php

namespace App\Http\Controllers;

use Midtrans\Config;
use Midtrans\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function processPayment(Request $request)
    {
        \Midtrans\Config::$serverKey = config('midtrans.server_key');

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'payment_type' => 'gopay',
            'gopay' => array(
                'enable_callback' => true,                // optional
                'callback_url' => 'someapps://callback'   // optional
            )
        );

        $response = \Midtrans\CoreApi::charge($params);
        return view('payment', ['response' => $response]);
    }
}
