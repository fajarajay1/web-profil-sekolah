<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sambutan;
use App\Models\prestasi;
class pageController extends Controller
{
    
    //
    public function sambutan()
    {
        $sambutan = sambutan::all();
        return view('/page/sambutan-kepala-sekolah', ['sambutan' => $sambutan]);
    }
    //
    public function prestasi()
    {
        $prestasi = prestasi::all();
        return view('/page/prestasi', ['prestasi' => $prestasi]);
    }
    
}
