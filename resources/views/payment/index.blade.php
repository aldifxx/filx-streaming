@extends('layouts.payment')

@section('title')
    Payment
@endsection

@section('payment')
<div class="form-login text-center">
<div class="container">
    <!-- head -->
    @include('includes.header')
    <!-- head -->
    <!-- main -->
    <div class="cover" style="margin-top : 100px;">
        <p class="label">Payment Method</p>
        <div class="konten">
                <div class="row">
                    <div class="col-6">
                        <div class="kiri">
                            <p class="select-payment mt-5">Select your payment</p>
                            <div class="credit">
                                <div class="">
                                    <input type="radio" name="credit">
                                </div>
                                <div class="icon">
                                    <img src="frontend/images/cc.png" alt="">
                                </div>
                                <div class="">
                                    Credit card
                                </div>
                            </div>

                            <p class="payment-information mt-4">Payment Information</p>

                            <p class="text-muted">Please complete your payment before to continue membership
                            </p>
                            <div class="price item mt-4">
                                <div class="member">
                                    Membership
                                </div>

                                <div class="harga">
                                    Rp. 50000
                                </div>
                            </div>
                            <div class="fee item">

                                <div class="fee">
                                    Fee
                                </div>

                                <div class="harga">
                                    Rp. 2500
                                </div>
                            </div>
                            <div class="total mt-4 item">
                                <div class="">Total(+Fee)</div>
                                <div class=""> <span>Rp.52500</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="kanan mt-5">
                            <form action="/payment" method="POST">
                                @csrf
                                <div class="action mb-4">
                                    <input type="text" name="firstname" id="firstname" placeholder="First name">
                                </div>
                                <div class="action mb-4">
                                    <input type="text" name="lastname" id="lastname" placeholder="Last name">
                                </div>
                                <div class="action mb-4">
                                    <input type="text" name="expired_date" id="expired_date" placeholder="Expiration date">
                                </div>
                                <div class="action mb-4">
                                    <input type="text" name="cardnumber" id="cardnumber" placeholder="Card number">
                                </div>
                                <div class="action mb-4">
                                    <input type="password" name="cvv" id="cvv" placeholder="Security Code (CVV)">
                                </div>
                                <button name="submit_member" class="text-white">Start Membership</button>
                            </form>
                        </div>

                    </div>
                </div>
        </div>
    </div>
</div>
    <!-- main -->
</div>
@endsection