@extends('layouts.default')

@section('content')

    <div class="ahead">
        Dashboard
    </div>
    <div class="abody">
        <div class="row">
            <div class=" col-3 box">
                <div class="row">
                    <div class="col-5">
                        <i class='fas fa-user-alt' style='font-size:60px; margin:13px'></i>
                    </div>
                    <div class="col" align="right">
                        <h1>12</h1>
                        Jumlah Pasien
                    </div>
                </div>
            </div>
            <div class="col-3 box">
                <div class="row">
                    <div class="col-5">
                        Icon
                    </div>
                    <div class="col" align="right">
                        <h1>3</h1>
                        Ruangan Pria
                    </div>
                </div>
            </div>
            <div class="col-3 box">
                <div class="row">
                    <div class="col-5">
                        Icon
                    </div>
                    <div class="col" align="right">
                        <h1>3</h1>
                        Ruangan Wanita
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection