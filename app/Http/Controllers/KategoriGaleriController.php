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
        $kategoriGaleri=KategoriGaleri::find($id);
  
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

    public function edit($id){
        $kategoriGaleri=KategoriGaleri::find($id);
    
        if(empty($kategoriGaleri)){
          return redirect (route('kategori_galeri.index'));
        } 
        return view('kategori_galeri.edit', compact('kategoriGaleri'));
      }

      public function update($id, Request $request){
        $kategoriGaleri=KategoriGaleri::find($id);
        $input=$request->all();
    
         if(empty($kategoriGaleri)){
          return redirect (route('kategori_galeri.index'));
        } 
        $kategoriGaleri->update($input);
    
        return redirect(route('kategori_galeri.index'));
      }
      public function destroy($id){
        $kategoriGaleri=KategoriGaleri::find($id);
    
        if(empty($kategoriGaleri)){
          return redirect (route('kategori_galeri.index'));
        }
        $kategoriGaleri->delete();
        return redirect(route('kategori_galeri.index'));
      }
}
