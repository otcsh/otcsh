<?php

namespace App\Http\Controllers;
use Utama;
use Katalog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function awal()
    {
    	$utama = \App\Utama::all();
    	return view('/admin.awal',['utama' => $utama]);
    }

    public function katalog()
    {
    	$katalog = \App\Katalog::all();
    	return view ('/admin.editkatalog',['katalog' => $katalog]);
    }
    public function katalogbarang(Request $request,$id)
    {
    	$katalog = \App\Katalog::find($id);
    	return view('/admin.katalog',['katalog' => $katalog]);
    }

    public function barangjadi(Request $request,$id)
    {
        $katalog = \App\Katalog::find($id);
        $katalog->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('image',$request->file('foto')->getClientOriginalName());
            $katalog->foto = $request->file('foto')->getClientOriginalName();

            $katalog->save();
        }
            return redirect('/editkatalog');
    }
    public function buat()
    {
        return view('/admin.katalogbaru');
    }
    public function buatbarang(Request $request)
    {
        $katalog = \App\Katalog::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('image',$request->file('foto')->getClientOriginalName());
            $katalog->foto = $request->file('foto')->getClientOriginalName();

            $katalog->save();
        }
        return redirect('/editkatalog')->with('sukses','Input Data Berhasil');
    }
    public function hapusbarang($id)
    {
        
        $katalog =\App\Katalog::find($id);
        $katalog->delete();
        
        
        
    
        
    
        return redirect('/editkatalog')->with('sukses','Data Berhasil Dihapus');
    }
    



   
    

    public function editshopee(Request $request,$id)
    {
    	$utama = \App\Utama::find($id);
    	$utama->update($request->all());
    	return redirect('/admin')->with('sukses','Data Berhasil Diupdate');
    }
    public function namatoko(Request $request,$id)
    {
    	$utama = \App\Utama::find($id);
    	$utama->update($request->all());
    	return redirect('/admin')->with('sukses','Data Berhasil Diupdate');
    }
    public function wa(Request $request,$id)
    {
    	$utama = \App\Utama::find($id);
    	$utama->update($request->all());
    	return redirect('/admin')->with('sukses','Data Berhasil Diupdate');
    }
    public function deskripsi(Request $request,$id)
    {
    	$utama = \App\Utama::find($id);
    	$utama->update($request->all());
    	return redirect('/admin')->with('sukses','Data Berhasil Diupdate');
    }

    public function editlogo(Request $request,$id)
    {
    	$utama = \App\Utama::find($id);
   		$utama->update($request->all());
   		if($request->hasFile('logo')){
   			$request->file('logo')->move('image',$request->file('logo')->getClientOriginalName());
   			$utama->logo = $request->file('logo')->getClientOriginalName();

   			$utama->save();
   		}
   		return redirect('/admin')->with('sukses','Data Berhasil Diupdate');
    
    }
}
