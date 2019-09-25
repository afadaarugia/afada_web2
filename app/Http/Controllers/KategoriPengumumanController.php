<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    //
    public function index(){
        $kategoriPengumuman=KategoriPengumuman::all();

        return view ('kategori_pengumuman.index', compact('kategoriPengumuman'));
    }
}
