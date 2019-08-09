<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller

  {
    public function index() 
	{
		$data['products'] = \DB::table('products')
		->orderBy('quantity')
		->get();
		return view ('products', $data);
}

    public function create()
	{
	return view('formproducts');
	}
        
    public function store(Request $request)
	{
			$rule = [
			'id' => ['required'],
			'name' =>  ['required'],
			'description' => ['required'],
			'quantity' => ['required'],
			'price' => ['required'],
                        
		];
		$this->validate($request, $rule);
		$input = $request->all();
		unset($input['_token']);
		$status = \DB::table('products')->insert($input);
		
		if ($status) {
			return redirect('/products')->with('success', 'Data berhasil ditambahkan');
		
		}else {
			
			return redirect('/products/create')->with('error', 'Data gagal ditambahkan');
			}
		}
                
        public function destroy(Request $request,$id)
		{
		$status=\DB::table('products')->where('id',$id)->delete();
		if ($status) {
				return redirect('/products')->with('success', 'Data berhasil dihapus');
				} else {
					return  redirect('/products/create')->with('error', 'Data gagal dihapus');
					}
	}
        
        public function edit(Request $request, $id)
        {
            $data['products']=\DB::table('products')->find($id);
            return \view('formproducts', $data);
            
        }
        public function update(Request $request, $id)
	{
		$rule = [
			$rule = 
			'id' => 'required',
			'name' => 'required',
			'description' => 'required',
			'quantity' => 'required',
			'price' => 'required',
                        ];

                $this->validate($request, $rule);
		
		$input = $request->all();
		unset($input['_token']);
		unset($input['_method']);
		

            $status = \DB::table('products')->where('id', $id)->update($input);
		
		if ($status) {
			return \redirect('/products')->with('success','Data berhasil diubah');
		} else {
			return \redirect('/products/create')->with('error','Data gagal diubah');
		}
	}
  }
