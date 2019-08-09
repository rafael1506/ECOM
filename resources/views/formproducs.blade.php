@if(session('error'))
<div class="alert alert-error">
	{{session('error')}}
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger">
	<strong>Perhatian</strong>
	<br/>
	<ul>
		@foreach ($errors->all() as $error)
		<li> {{ $error }} </li>
		@endforeach
	</ul>
	</div>
@endif
<form action="{{url('products')}}" method="POST">
	@csrf
	<table border = '1'>
	
	
	Nama: <input type="text" name="name" value="{{ old('name',  @$products->name) }}"/><br/>
	
	Email: <input type="text" name="deskription" value="{{ old('deskription',  @$products->email) }}"/><br/>
	
	Password: <input type="text" name="quantity" value="{{ old('quantity',  @$products->password) }}"/><br/>
	
        Alamat: <input type="text" name="price" value="{{ old('price',  @$products->alamat) }}"/><br/>
        

        <input type="submit" value="Simpan"/>
		
		
	</table>
</form>

