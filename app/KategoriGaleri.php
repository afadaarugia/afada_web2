<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    //
    protected $table="kategori_artikel";
    protected $fillable = [
        'nama'
    ];
}
