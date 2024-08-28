<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentPage()
    {
        // Display the payment page
        return view('payment.paymentPage');
    }
}
