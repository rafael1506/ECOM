<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gambar;
use File;

    class UploadController extends Controller
    {
	public function upload(){
		$gambar = Gambar::get();
		return view('upload',['gambar' => $gambar]);
	}
    

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
			'keterangan' => 'required',
                        'harga' => 'required',
                        'stock' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Gambar::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
                    'harga' => $request->harga,
                    'stock' => $request->stock,
		]);

		return redirect()->back();
	}

	public function hapus($id){
		

		// hapus data
		Gambar::where('id',$id)->delete();

		return redirect()->back();
	}
        
          public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$users = \DB::table('gambar')
		->where('keterangan','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('upload',['gambar' => $users]);
 
	}
}