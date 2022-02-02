@extends('layouts.success')

@section('title')
    Payment
@endsection

@section('successpayment')
<div class="form-register text-center" style="margin-top:200px;">
        <img src="frontend/images/success.png" alt="">
    </div>
        <h1>Thank you!</h1>
        <p>Your purchase was successful</p>
        <a href="/login">
            <button class="btn btn-berhasil" style="width:150px;height:50px;background-color:orange;color:white;">login</button></a>
    </div>
</section>
@endsection