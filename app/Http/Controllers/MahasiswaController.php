<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        //mengambil data dr tabel
        $mahasiswa = DB::table('mahasiswa')->get();
        
        //mengirim data mahasiswa ke view index
        return view ('index',['mahasiswa'=> $mahasiswa]);
        
    }

    public function create(){
        //memanggil view tambah
        return view('create');
    }

    public function store(){
        //insert data ke tabel mhs
        DB::table('mahasiswa')->insert([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'smt'=>$request->semester,
            'jk'=>$request->jenis_kelamin,

        ]);

        //alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }
}
