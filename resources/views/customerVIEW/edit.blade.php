@extends('layouts.default')

@section('content')

    <div>
        <h2 align="center">Edit Customer</h2>
        <a class="btn btn-primary mb-2" href="{{ route('Customer.index') }}">
            <i class="fas fa-backspace"></i>
        </a>
    </div>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoopps!</strong> There were some problems with your input. <br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>    
    </div>
    @endif

    {!! Form::model($db, ['method' => 'PATCH','route' => ['Customer.update', $db->id_customer],'class' => 'was-validated' ]  ) !!}
    <div class="row mb-3 mt-1">
        <div class="col">
            {!! Form::text('nama_customer', null, array('class'=>'form-control', 'required')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col ">
        {!! Form::text('telp_customer', null, array('class'=>'form-control', 'required' ,'onkeypress'=>'return hanyaAngka(event)')) !!}      
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            {!! Form::email('email_customer', null, array ('class'=>'form-control','required')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col">
            {!! Form::text('point_customer', null, array ('class'=>'form-control','required','onkeypress'=>'return hanyaAngka(event)')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            {!! Form::text('alamat_customer', null, array ('class'=>'form-control','required')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="">Tanggal Pendaftaran</label>
            {!! Form::date('pendaftaran_customer', null, array ('class'=>'form-control','required')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col">
            <label for="">Tanggal Lahir</label>
            {!! Form::date('lahir_customer', null, array('class'=>'form-control', 'required')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col">
            <label for="">Jenis Kelamin</label>
            <select name="jk_customer" class="custom-select" required>
                <option value="" read only>-- Jenis Kelamin --</option>
                <option value="1">Pria</option>
                <option value="2">Wanita</option>
            </select>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>

    <div class="row mb-3 mt-1">
        <div class="col"></div>
        
        <div class="col">
            <label for="">Password</label>
            {!! Form::text('password_customer', null, array('class'=>'form-control', 'required', 'disabled')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="col">
            <label for="">ID</label>
        {!! Form::text('id_customer', null, array('class'=>'form-control', 'required','disabled')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="">Keterangan Alergi</label>
            {!! Form::textarea('alergi_customer', null, array ('class'=>'form-control','required')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-1">
        <button type="submit" class="btn btn-primary" onclick="kirim()">Submit</button>
    </div>

    <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
		    return false;
		  return true;
		}

        function kirim(){
            var tamp = document.getElementById("tgl").value;
            alert(temp);  
        }
	</script>
    {!! Form::close() !!}
@endsection    