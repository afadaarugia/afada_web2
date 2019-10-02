<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;
use App\Artikel;


class KategoriArtikelController extends Controller
{
    //
    public function index(){
      $kategoriArtikel=KategoriArtikel::all();  

        return view ('kategori_artikel.index', compact('kategoriArtikel'));
    }
    public function show($id){
      $kategoriArtikel=KategoriArtikel::find($id);

      return view('kategori_artikel.show', compact('kategori_artikel'));
  }


  public function create(){
      $kategoriArtikel=KategoriArtikel::pluck('nama','id');
      return view('kategori_artikel.create', compact('kategoriArtikel'));
  }

  public function store(Request $request){
      $input=$request->all();

      KategoriArtikel::create($input);

      return redirect(route ('kategori_artikel.index'));
  }
}
