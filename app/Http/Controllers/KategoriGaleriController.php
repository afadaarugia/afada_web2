<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    //
    public function index(){
        $kategoriGaleri=KategoriGaleri::all();

        return view ('kategori_galeri.index', compact('kategoriGaleri'));
    }
    public function show($id){
        $kategoriGaleri=KategoriArtikel::find($id);
  
        return view('kategori_galeri.show', compact('kategori_galeri'));
    }
  
  
    public function create(){
        $kategoriGaleri=KategoriGaleri::pluck('nama','id');
        return view('kategori_galeri.create', compact('kategoriGaleri'));
    }
  
    public function store(Request $request){
        $input=$request->all();
  
        KategoriGaleri::create($input);
  
        return redirect(route ('kategori_galeri.index'));
    }
}
