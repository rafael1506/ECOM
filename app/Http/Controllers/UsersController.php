<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller

{
    public function index() 
	{
		$data['users'] = \DB::table('users')
		->orderby('name')
		->get();
		return view ('users', $data);
    }

   
                
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$users = \DB::table('users')
		->where('name','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('users',['users' => $users]);
 
	}
        

        
        public function hapus($id){
		

		// hapus data
                DB::table('users')->where('id',$id)->delete();
                        

		return redirect('/users');
	}
                
                

  }