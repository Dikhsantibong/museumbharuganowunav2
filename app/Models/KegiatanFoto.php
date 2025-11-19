<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanFoto extends Model
{
    protected $primaryKey = 'id_foto';

    protected $fillable = [
        'id_kegiatan',
        'foto',
        'caption'
    ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
    }
}
