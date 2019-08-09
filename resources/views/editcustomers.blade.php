<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($customers as $p)
	<form action="/customers/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="name" value="{{ $p->name }}"> <br/>
		Email <input type="text" required="required" name="email" value="{{ $p->email }}"> <br/>
		Password <input type="number" required="required" name="password" value="{{ $p->password }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
                Telp <textarea required="required" name="telp">{{ $p->telp }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>