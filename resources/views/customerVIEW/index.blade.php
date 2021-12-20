@extends('layouts.default')

@section('content')

    <div class="row">
        <h2 class="mb-5" align="center">Customer</h2>
    </div>
        <div class="col-8">
            <a class="btn btn-success mb-2" href="{{ route('Customer.create') }}">
                <i class="material-icons" style="font-size:22px">&#xe146;</i>
            </a>
        </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>ID</th>
                <th>Telepon</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        
        @if(count($db))
        @foreach($db as $db)
            <tbody>
                <tr>
                    <td>{{ $db->nama_customer }}</td>
                    <td>{{date('m', strtotime($db->pendaftaran_customer)) .''. substr(date('Y', strtotime($db->lahir_customer)),0,2) .' '. date('dm', strtotime($db->lahir_customer)).' '. date('Y', strtotime($db->lahir_customer)).' '. $db->nomor_customer}}</td>
                    <td>0{{ $db->telp_customer}}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('Customer.show',$db->id_customer) }} ">
                            <i class='far fa-address-card' style='font-size:18px'></i>
                        </a>
                        <a class="btn btn-primary"  href="{{ route('Customer.edit',$db->id_customer) }} ">
                            <i class='fas fa-pencil-alt'></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        @endforeach
        @else
            <tr>
                <td align="center" colspan="4">Empty Data!! Have a nice day !</td>
            </tr>
        @endif
    </table>
@endsection