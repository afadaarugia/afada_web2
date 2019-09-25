<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    //
    protected $table="kategori_artikel";
    protected $fillable = [
        'nama'
    ];
}
