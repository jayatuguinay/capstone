@extends('admin.layout')
@section('content')
<!--Madadagdgan pato ng design hehehe-->
<div class="container bg-light mt-5 mb-5 shadow">
    <div class="row p-5">
        <div class="col-md-6 text-center" style="border-radius:50px;">
            <img src="{{ url('public/img/nvsu.png') }}" class="logo" alt="logo" >
            <h5 class="text-black text-center">NUEVA VIZCAYA STATE UNIVERSITY RFID-BASED VEHICLE ENTRY AND EXIT MONITORING SYSTEM</h5>
        </div>
        <div class="col-md-6 text-center" style="border-radius:50px;">
            <p>username ni admin magpakita dito</p>
            <div style="text-align: right;" class="fixed-bottom">
                <div class="col-md-12">
                    <div id="clock"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
