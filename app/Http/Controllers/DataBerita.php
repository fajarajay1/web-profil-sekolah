<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\profilController as ModelsprofilController;

class profilController extends Controller
{
    //sambutan kepala sekolah

    public function sambutan()
    {
        $sambutan = sambutan::all();
        return view('profil.kepala-sekolah.index', ['sambutan' => $sambutan]);
    }

    public function sambutanCreate()
    {
      return view('profil/kepala-sekolah/create');
    }

    public function sambutanDetail($id)
    {
      $sambutan = sambutan::find($id);
      return view('profil.kepala-sekolah.detail', compact('sambutan'));
    }
    
    public function sambutanEdit($id)
    {
      $sambutan = sambutan::find($id);
      return view('profil.kepala-sekolah.edit', compact('sambutan'));
    }

    public function sambutanPost(Request $req)
    {
        $id = $req->get('id');
        if($id){
            $sambutan = sambutan::find($id);
        }else{
            $sambutan = new sambutan;
        }
        if($req->gambar){
          if($req->hasFile('gambar')){
            $foto = $req->file('gambar');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $destinationPath = 'image/';              
             $foto->move($destinationPath, $filename);
            }
            $sambutan->gambar = $filename;
        }

        $sambutan->judul = $req->judul;
        $sambutan->isi = $req->isi;
        $sambutan->save();
        return redirect()->route('profil.kepala-sekolah.index')->with(['success' => 'Data Berhasil Di Simpan']);
    }

      public function sambutanDel($id) {
        $sambutan = sambutan::find($id);
        $sambutan->delete();
      
        return redirect('/profil/kepala-sekolah');
    }
}
