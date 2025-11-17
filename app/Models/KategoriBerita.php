<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;

    protected $table = 'kategori_beritas';
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'nama_kategori',
    ];

    /**
     * Relasi ke Berita (One to Many)
     */
    public function beritas()
    {
        return $this->hasMany(Berita::class, 'id_kategori', 'id_kategori');
    }
}
