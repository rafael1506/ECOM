<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Gambar;
use File;

class WelcomeController extends Controller
{
   
	

    public function index()
    {
    	// mengambil data dari table pegawai
    	$gambar = DB::table('gambar')->get();
        
        
 
    	// mengirim data pegawai ke view index
    	return view('welcome',['gambar' => $gambar]);
 
    }
    
}
