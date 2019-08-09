<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row">
		<div class="container">
 
			
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>
 
					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
                                        
                                        <div class="form-group">
						<b>Harga</b>
						<textarea class="form-control" name="harga"></textarea>
					</div>
                                        
                                        <div class="form-group">
						<b>Stock</b>
						<textarea class="form-control" name="stock"></textarea>
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary"/>
				</form>
				
				<h4 class="my-5">Data</h4>
                                <form action="{{ url('/users') }}">
    		<button type="submit">Kelola Users</button>
        </form>
                                <p>Cari Data Barang :</p>
	<form action="/upload/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Customers .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
                <input type="submit" value="BACK">
        </form><br><br>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
							<th>Keterangan</th>
                                                        <th width="1%">Harga</th>
                                                        <th width="1%">Stock</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($gambar as $g)
						<tr>
							<td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
							<td>{{$g->keterangan}}</td>
                                                        <td>{{$g->harga}}</td>
                                                        <td>{{$g->stock}}</td>
							<td><a class="btn btn-danger" href="/upload/hapus/{{ $g->id }}">HAPUS</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
        <form action="{{ url('/welcome') }}">
    		<button type="submit">Halaman utama</button>
        </form>
			</div>
		</div>
	</div>
</body>
</html>