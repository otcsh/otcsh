<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtamaController extends Controller
{
    public function home()
    {
    	$utama = \App\Utama::all();

     return view('/utama.awal',['utama' => $utama]);	
    }
   
   public function katalog()
   {
   	$katalog = \App\Katalog::all();
   	$utama = \App\Utama::all();
   	return view('/utama.katalog',['katalog' => $katalog],['utama' => $utama]);
   }

}
