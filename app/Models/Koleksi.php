<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Koleksi extends Model
{
    use HasFactory;

    protected $table = 'koleksis';
    protected $primaryKey = 'id_koleksi';

    protected $fillable = [
        'nama_koleksi',
        'tahun_pembuatan',
        'tempat_perolehan',
        'tanggal_masuk',
        'cara_perolehan',
        'jenis_koleksi',
        'uraian',
    ];

    public function foto()
    {
        return $this->hasMany(FotoKoleksi::class, 'id_koleksi', 'id_koleksi');
    }
}
