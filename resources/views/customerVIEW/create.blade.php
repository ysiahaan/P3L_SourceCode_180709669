@extends('layouts.default')

@section('content')

    <div>
        <h2 align="center">Regis Customer</h2>
        <a class="btn btn-primary mb-2" href="{{ route('Customer.index') }}">
            <i class="fas fa-backspace"></i>
        </a>
    </div>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoopps!</strong> There were some problems with your input. 
        <br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>    
    </div>
    @endif

    {!! Form::open(array('route' => 'Customer.store','method'=>'POST', 'class'=>'was-validated')) !!}

    <div class="row mb-3 mt-1">
        <div class="col">
            <input type="text" placeholder="Nama Customer" class="form-control" name="nama_customer" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col ">
            <input type="text" class="form-control" id="telp" placeholder="No Telepon" name="telp_customer" onkeypress="return hanyaAngka(event)" maxlength="13" required>        
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            {!! Form::email('email_customer', null, array ('placeholder' => 'Email', 'class'=>'form-control','required')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col">
            {!! Form::text('point_customer', null, array ('placeholder' => 'Point', 'class'=>'form-control','required','onkeypress'=>'return hanyaAngka(event)')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            {!! Form::text('alamat_customer', null, array ('placeholder' => 'Alamat', 'class'=>'form-control','required')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="">Tanggal Pendaftaran</label>
            {!! Form::date('pendaftaran_customer', null, array ('placeholder' => 'Tanggal Pendaftaran', 'class'=>'form-control','required')) !!}
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col">
            <label for="">Tanggal Lahir</label>
            <input type="date" data-date-format="mm/dd/yyyy" name="lahir_customer" class="form-control"required id="tgl_lahir_customer" onchange="checkValue()">
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


    <script>
        const checkValue=()=>{
            const date = document.getElementById("tgl_lahir_customer").value;
            const year = date.substring(0,4);
            const month = date.substring(5,7);
            const day = date.substring(8,10);
            document.getElementById("password_customer").value=day.concat("",month.concat("",year));
        }
    </script>

 
    <div class="row mb-3 mt-1">
        <div class="col"></div>
        
        <div class="col">
            <input type="password" class="form-control" placeholder="Password" name="password_customer" required id="password_customer" disabled>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="col">
            <input type="text" placeholder="ID Customer" class="form-control" name="id_customer" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            {!! Form::textarea('alergi_customer', null, array ('placeholder' => 'Elergi', 'class'=>'form-control','required')) !!}
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