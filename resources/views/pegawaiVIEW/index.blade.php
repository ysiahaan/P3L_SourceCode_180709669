@extends('layouts.default')

@section('content')

    <div class="row">
        <h2 class="mb-5" align="center">Pegawai</h2>
    </div>
        <div class="col-8">
            <a class="btn btn-success mb-2" href="{{ route('Pegawai.create') }}">
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
                    <td>{{ $db->nama_pegawai }}</td> 
                    <td> {{ $db->id_pegawai}} </td>
                    <td>0{{ $db->telp_pegawai}}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('Pegawai.show',$db->id_pegawai) }} ">
                            <i class='far fa-address-card' style='font-size:18px'></i>
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