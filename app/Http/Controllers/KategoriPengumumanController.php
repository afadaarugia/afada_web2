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
    public function show($id){
        $kategoriPengumuman=KategoriPengumuman::find($id);
  
        return view('kategori_pengumuman.show', compact('kategori_pengumuman'));
    }
  
  
    public function create(){
        $kategoriPengumuman=KategoriPengumuman::pluck('nama','id');
        return view('kategori_pengumuman.create', compact('kategoriPengumuman'));
    }
  
    public function store(Request $request){
        $input=$request->all();
  
        KategoriPengumuman::create($input);
  
        return redirect(route ('kategori_pengumuman.index'));
    }
}
