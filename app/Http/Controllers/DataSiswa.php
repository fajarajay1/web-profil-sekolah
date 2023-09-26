<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa as ModelsDataSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataSiswa extends Controller
{
    function index()
    {
        $data = ModelsDataSiswa::all();
        return view('data_siswa.index', ['data' => $data]);
    }
    function tambah()
    {
        return view('data_siswa.tambah');
    }
    function edit($id)
    {
        $data = ModelsDataSiswa::find($id);

        return view('data_siswa.edit', ['data' => $data]);
    }
    function hapus(Request $request)
    {
        ModelsDataSiswa::where('id', $request->id)->delete();

        Session::flash('success', 'Berhasil Hapus Data');

        return redirect('/datasiswa');
    }
    // new
    function create(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'nis' => 'required|max:8',
            'kelas' => 'required',
            'jurusan' => 'required',
        ], [
            'name.required' => 'Name Wajib Di isi',
            'name.min' => 'Bidang name minimal harus 3 karakter.',
            'email.required' => 'Email Wajib Di isi',
            'email.email' => 'Format Email Invalid',
            'nis.required' => 'nis Wajib Di isi',
            'nis.max' => 'nis max 8 Digit',
            'kelas.required' => 'kelas Wajib Di isi',
            'kelas.min' => 'masukan kelas dengan benar',
            'kelas.max' => 'masukan kelas dengan benar',
            'jurusan.required' => 'Jurusan Wajib Di isi',
        ]);

        ModelsDataSiswa::insert([
            'name' => $request->name,
            'email' => $request->email,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
        ]);

        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/datasiswa')->with('success', 'Berhasil Menambahkan Data');
    }
    function change(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'nis' => 'required|min:8|max:8',
            'kelas' => 'required',
            'jurusan' => 'required',
        ], [
            'name.required' => 'Name Wajib Di isi',
            'name.min' => 'Bidang name minimal harus 3 karakter.',
            'email.required' => 'Email Wajib Di isi',
            'email.email' => 'Format Email Invalid',
            'nis.required' => 'nis Wajib Di isi',
            'nis.max' => 'nis max 8 Digit',
            'nis.min' => 'nis min 8 Digit',
            'kelas.required' => 'kelas Wajib Di isi',
            'kelas.min' => 'masukan kelas dengan benar',
            'kelas.max' => 'masukan kelas dengan benar',
            'jurusan.required' => 'Jurusan Wajib Di isi',
        ]); 

        $datasiswa = ModelsDataSiswa::find($request->id);

   
        $datasiswa->email = $request->email;
        $datasiswa->nis = $request->nis;
        $datasiswa->kelas = $request->kelas;
        $datasiswa->jurusan = $request->jurusan;
        $datasiswa->save();

        Session::flash('success', 'Berhasil Mengubah Data');

        return redirect('/datasiswa');
    }
}
