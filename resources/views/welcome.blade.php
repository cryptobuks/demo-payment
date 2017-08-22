@extends('master')
@section('content')
    <div style="max-width: 600px; margin: 0 auto;">
        {!! render_payment_form() !!}
    </div>

    <style>
        .account {
            background: rgb(255, 255, 255);
            border-radius: 5px;
            color: white;
            margin: 15px 0px;
            text-align: left;
            padding: 5px 15px;
            box-shadow: 0 15px 35px 0 rgba(50, 50, 93, 0.15);
        }
    </style>
    <br>
    <div class="clearfix"></div>
    <div class="container" style="max-width: 600px; margin: 0 -15px;">
        <div class="row">
            <div class="col-md-6">
                <div class="account" style="background-image: linear-gradient( 135deg, #52E5E7 0%, #130CB7 100%);">
                    <h1>Paypal</h1>
                    <p>sangit7b@test.com</p>
                    <p>12345678</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="account" style="background-image: linear-gradient( 135deg, #CE9FFC 0%, #7367F0 100%);">
                    <h1>Credit card</h1>
                    <p>4242 4242 4242 4242</p>
                    <p>Anything in the cvv and expiration date</p>
                </div>
            </div>
        </div>
    </div>
@endsection
