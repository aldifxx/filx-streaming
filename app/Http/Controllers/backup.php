<?php

namespace App\Http\Controllers;
use App\Payments;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    use AuthenticatesUsers;

    public function index(Request $request) {

        return view('payment.index');
    }

    public function verify_data(Request$request)
    {
        $validateData=$request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'expired_date' => 'required',
            'cardnumber' => 'required',
            'cvv' => 'required|min:3'
            
        ]);
        $result= Payments::where($validateData)->first();

        if($request)
        {
            return redirect('/success');
        }
    }
}
