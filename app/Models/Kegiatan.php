<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $primaryKey = 'id_kegiatan';

    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'thumbnail',
        'lokasi',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
    ];

    public function fotos()
    {
        return $this->hasMany(KegiatanFoto::class, 'id_kegiatan');
    }
}
