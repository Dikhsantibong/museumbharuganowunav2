<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarBerita extends Model
{
    use HasFactory;

    protected $table = 'komentar_beritas';
    protected $primaryKey = 'id_komentar';

    protected $fillable = [
        'id_berita',
        'nama',
        'email',
        'komentar',
    ];

    /**
     * Relasi ke berita (Many to One)
     */
    public function berita()
    {
        return $this->belongsTo(Berita::class, 'id_berita', 'id_berita');
    }
}
