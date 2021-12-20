<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scala-1.0">

    <link rel="stylesheet" href="style_employee.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <script src="{{ asset('js/script.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
	<title>Dashbord</title>
</head>
<body>
	<div id="app">
		<div class="sidebar">
			<div class="header">
				<p class="brand">WEB <span>I SITE</span></p>
			</div>
			<div class="body">  
				<a href=""><div class="item">Dashboard</div></a>
				<a href="{{ route('Customer.index') }}"><div class="item ">Customer</div></a>  
                <a href="{{ route('Pegawai.index') }}"><div class="item ">Pegawai</div></a>
                <a href=""><div class="item ">Produk</div></a>
                <a href=""><div class="item ">Perawatan</div></a>
                <a href=""><div class="item ">Jadwal</div></a>
			</div>
		</div>
		<div class="content">
			<div class="header" >
				<div class="hamburger" onclick="toogleSidebar()">
					<div></div>
					<div></div>
					<div></div>
				</div>
                <a href="{{ url('logout') }}" class="logout" style="text-decoration:none;">Hai Yoel, Admin</a>
			</div>
            
            <div class="body header">
				<p class="title">NATURAL BEAUTY CENTER</p>
            </div>
            <table class="table" style="position: relative; margin-top: -20px;"><tr><td></td></tr></table> 

            <div class="container"> 
                <div class = "container">
                    @yield('content')
                </div>
            </div>
		</div>
	</div>

	<script scr="{{ asset('js/script.js') }}"></script>
</body>
</html>