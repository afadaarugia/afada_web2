<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    //
    public function index(){
      $kategoriArtikel=KategoriArtikel::all();  

        return view ('kategori_artikel.index', compact('kategoriArtikel'));
    }
}
