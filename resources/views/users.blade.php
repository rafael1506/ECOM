<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title></title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> </a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> </a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> </a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> </a></li>
                                                <li><a href="/login"><i class="fa fa-user-o"></i> My Account </a></li>
                                               
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="/welcome" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								
									
                                                                        <form action="/users/cari" method="GET">
									<input class="input" type="text" name="cari" placeholder="Search here" value="{{old('cari')}}">
                                                                        
									<button class="search-btn" value="CARI">Search</button>
                                                                        
								</form>
							</div>
                                                </div>
                                        </div>
                                </div>
                            </div>
                </header>
						<!-- /SEARCH BAR -->
@if(session('success'))
<div class="alert alert-success">
	{{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-error">
	{{session('error')}}
</div>
@endif







<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		
		
	</tr>
	@foreach ($users as $row)
	<tr>
		<td>{{isset($i) ? ++$i : $i = 1 }}</td>
		<td>{{$row->name}}</td>
		<td>{{$row->email}}</td>
                
		
		<td>
	|
        <form>
            <a class="btn btn-danger" href="/users/hapus/{{ $row->id }}">HAPUS</a>
		
		
	</form>
        
  </td>
	</tr>
	@endforeach
</table><br><br>
        <form action="{{ url('/upload') }}">
    		<button type="submit">Kelola Barang</button>
        </form><br><br>
<form action="{{ url('/welcome') }}">
    		<button type="submit">Halaman utama</button>
        </form>
<br/>
                                </div>
                        </div>
</div>
</body>