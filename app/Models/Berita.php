<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';
    protected $primaryKey = 'id_berita';

    protected $fillable = [
        'id_kategori',
        'judul',
        'slug',
        'konten',
        'thumbnail',
        'tanggal_publikasi',
        'status',
    ];

    /**
     * Boot - generate slug otomatis
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($berita) {
            if (empty($berita->slug)) {
                $berita->slug = Str::slug($berita->judul);
            }
        });
    }

    /**
     * Relasi ke kategori (Many to One)
     */
    public function kategori()
    {
        return $this->belongsTo(KategoriBerita::class, 'id_kategori', 'id_kategori');
    }

    /**
     * Relasi ke komentar (One to Many)
     */
    public function komentar()
    {
        return $this->hasMany(KomentarBerita::class, 'id_berita', 'id_berita');
    }
}
