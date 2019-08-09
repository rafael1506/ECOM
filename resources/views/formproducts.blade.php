
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
        
        @if(!empty($siswa))
            @method('PATCH')
            @endif
	<table border = '1'>
	
	ID : <input type="text" name="id" value="{{ old('id',  @$products->name) }}"/><br/>
            
	Nama Barang : <input type="text" name="name" value="{{ old('name',  @$products->name) }}"/><br/>
	
	Deskripsi : <input type="text" name="description" value="{{ old('description',  @$products->deskription) }}"/><br/>
	
	Quantity : <input type="text" name="quantity" value="{{ old('quantity',  @$products->quantity) }}"/><br/>
	
        Harga : <input type="text" name="price" value="{{ old('price',  @$products->price) }}"/><br/>
        

        <input type="submit" value="Simpan"/>
		
		
	</table>
</form>

