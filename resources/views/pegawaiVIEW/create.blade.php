@extends('layouts.default')

@section('content')

    <div>
        <h2 align="center">Regis Pegawai</h2>
        <a class="btn btn-primary mb-2" href="{{ route('Pegawai.index') }}">
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

    {!! Form::open(array('route' => 'Pegawai.store','method'=>'POST', 'class'=>'was-validated')) !!}

    <div class="row mb-3 mt-1">
        <div class="col">
            <input type="text" placeholder="Nama Pegawai" class="form-control" name="nama_pegawai" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col ">
            <input type="text" class="form-control" id="telp" placeholder="No Telepon" name="telp_pegawai" onkeypress="return hanyaAngka(event)" maxlength="13" required>        
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>

    <div class="row mb-3 mt-1">
        <div class="col">
            <input type="text" placeholder="Id Pegawai" class="form-control" name="id_pegawai" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col ">
            <input type="text" class="form-control"  placeholder="Id role" name="role_id"  required>        
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col ">
            <label for="">jadwal id</label>
            <input type="text" class="form-control"  placeholder="jadwal id" name="jadwal_id" required>        
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>
    
 
    <div class="row mb-3"> 
        <div class="col"> 
            <select name="jk_pegawai" class="custom-select" required>
                <option value="" read only>-- Jenis Kelamin --</option>
                <option value="1">Pria</option>
                <option value="2">Wanita</option>
            </select>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="col ">
            <input type="text" class="form-control"  placeholder="Alamat" name="alamat_pegawai"  required>        
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
    </div>
 
    <div class="row mb-3 mt-1"> 
        <div class="col">
            <input type="email" class="form-control" placeholder="Username" name="username_pegawai" required >
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="col">
            <input type="password" class="form-control" placeholder="Password" name="password_pegawai" required >
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Status Pegawai" name="status_pegawai" required >
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
          

    </div>

     
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-1">
        <button type="submit" class="btn btn-primary" >Submit</button>
    </div>

    <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
		    return false;
		  return true;
		} 
	</script>

    {!! Form::close() !!} 
@endsection    