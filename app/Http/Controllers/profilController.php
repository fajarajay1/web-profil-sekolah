<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Eloquent;
use App\Models\sambutan;
use App\Models\prestasi;
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

        //prestasi
        public function prestasiGet()
        {
            $prestasi = prestasi::all();
            return view('profil.prestasi.index',  ['prestasi' => $prestasi]);
        }
        public function prestasiCreate()
        {
          return view('/profil/prestasi/create');
        }
        public function prestasiEdit($id)
        {
          $prestasi = prestasi::find($id);
          return view('profil.prestasi.edit', compact('prestasi'));
        }
    
        public function prestasiPost(Request $req)
        {
            $id = $req->get('id');
            if($id)
            {
                $prestasi = prestasi::find($id);
            }else
            {
                $prestasi = new prestasi;
            }
            if($req->gambar){
              if($req->hasFile('gambar')){
                $foto = $req->file('gambar');
                $filename = time() . '.' . $foto->getClientOriginalExtension();
                $destinationPath = 'image/';              
                 $foto->move($destinationPath, $filename);
                }
                $prestasi->gambar = $filename;
            }
            $prestasi->nama_lomba = $req->nama_lomba;
            $prestasi->bidang_lomba = $req->bidang_lomba;
            $prestasi->juara = $req->juara;
            $prestasi->ket = $req->ket;
            $prestasi->save();
            return redirect()->route('profil.prestasi.index')->with(['success' => 'Data Berhasil Di Simpan']);
        }
        public function prestasiDel($id)
      {
        $prestasi = prestasi::findOrFail($id);
        $prestasi->delete();
    
        return redirect('/profil/prestasi');
          if($prestasi){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }
}
