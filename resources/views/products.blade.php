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






<a href="{{url('/products/create')}}">Tambah Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>ID</th>
		<th>Nama</th>
		<th>Deskripsi</th>
		<th>Quantity</th>
		<th>Harga</th>
		
	</tr>
	@foreach ($products as $row)
	<tr>
		<td>{{isset($i) ? ++$i : $i = 1 }}</td>
		
		<td>{{$row->id}}</td>
		<td>{{$row->name}}</td>
		<td>{{$row->description}}</td>
		<td>{{$row->quantity}}</td>
		<td>{{$row->price}}</td>
		<td>
	<a href="{{ url('/products/' . '$row->id' . '/edit') }}">Edit</a>
	|
	<form action="{{ url('/products', $row->id) }}" method="POST">
		@method('DELETE')
		@csrf
		<button type="submit">Delete</button>
	</form>

  </td>
	</tr>
	@endforeach
	</table>


