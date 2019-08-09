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





<p>Cari Data Customers :</p>
	<form action="/customers/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Customers .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Password</th>
		<th>Alamat</th>
		<th>Telp</th>
		
	</tr>
	@foreach ($usess as $row)
	<tr>
		<td>{{isset($i) ? ++$i : $i = 1 }}</td>
		<td>{{$row->name}}</td>
		<td>{{$row->email}}</td>
		<td>{{$row->password}}</td>
		<td>{{$row->alamat}}</td>
		<td>{{$row->telp}}</td>
		<td>
	<a href="{{ url('/users/' . '$row->id' . '/edit') }}">Edit</a>
	|
	<form action="{{ url('/users', $row->id) }}" method="POST">
		@method('DELETE')
		@csrf
		<button type="submit">Delete</button>
	</form>

  </td>
	</tr>
	@endforeach
	</table>
<br/>
	
