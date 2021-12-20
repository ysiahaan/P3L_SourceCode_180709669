@extends('layouts.default')

@section('content')

    <div>
        <h2 align="center">Detail Customer</h2>
        <a class="btn btn-primary mb-2" href="{{ route('Customer.index') }}">
            <i class="fas fa-backspace"></i>
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <td>
                    <div class="mb-3 mt-3" align="center" style="font-size:20px">
                        <strong>{{ $db->nama_customer }}</strong>
                    </div>
                </td>
                <td>
                    <div class="mb-3 mt-3" align="center" style="font-size:20px">
                        <strong>{{date('m', strtotime($db->pendaftaran_customer)) .''. substr(date('Y', strtotime($db->lahir_customer)),0,2) .' '. date('dm', strtotime($db->lahir_customer)).' '. date('Y', strtotime($db->lahir_customer)).' '. $db->nomor_customer}}</strong>
                    </div>
                </td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    @if($db->jk_customer == 1)
                        Pria
                        @else 
                        Wanita
                    @endif    
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $db->alamat_pegawai }}</td>
            </tr>
            <tr>
                <td>id Pegawai<td>  
                <td>{{ $db->id_pegawai }}</td>
             </tr>
            
             <tr>
                <td>id Role<td>  
                <td>{{ $db->role_pegawai }}</td>
            </tr>
             <tr>
                <td>No Telp</td>
                <td>0{{ $db->telp_pegawai }}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>{{ $db->lahir_customer }}</td>
            </tr>
            <tr>
                <td>Tanggal Pendaftaran</td>
                <td>{{ $db->pendaftaran_customer }}</td>
            </tr>
            <tr>
                <td>Alergi</td>
                <td>{{ $db->alergi_customer }}</td>
            </tr>
            <tr>
                <td>Jumlah Point</td>
                <td>{{ $db->point_customer }}</td>
            </tr>
        </tbody>
    </table>
@endsection