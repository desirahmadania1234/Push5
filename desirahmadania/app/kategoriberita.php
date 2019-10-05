<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoriBerita extends Model
{
    protected $table='kategori_berita';

    protected $fillable=[
        'nama', 'users_id'
    ];

    protected $casts=[
        
    ];
}
