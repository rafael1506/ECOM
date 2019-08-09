<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller

  {
    public function index() 
	{
		$data['users'] = \DB::table('users')
		
		->get();
		return view ('users', $data);
    }

   
                
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$customers = DB::table('users')
		->where('name','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('editcustomers',['users' => $users]);
 
	}
        

        
        public function destroy(Request $id)
		{
		DB::table('users')->where('id',$id)->delete();
                return redirect('/users');
		}

  }
