<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessPaymentController extends Controller
{
    public function index(Request $request) {
        return view('payment.success');
    }
}
