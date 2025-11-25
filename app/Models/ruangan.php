<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    /** @use HasFactory<\Database\Factories\RuanganFactory> */
    use HasFactory;
     protected $table = 'ruangans';

    protected $fillable = [
        'nama_ruangan',
        'kode_ruangan',
        'bangunan_id',
    ];

    function bangunan(){
        return $this->belongsTo(Bangunan::class);
    }

    function barang() {
        return $this->hasMany(Barang::class);
    }
}
