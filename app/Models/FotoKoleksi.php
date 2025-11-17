<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FotoKoleksi extends Model
{
    use HasFactory;

    protected $table = 'foto_koleksi';
    protected $primaryKey = 'id_foto';

    protected $fillable = [
        'id_koleksi',
        'foto',
        'sumber',
    ];

    public function koleksi()
    {
        return $this->belongsTo(Koleksi::class, 'id_koleksi', 'id_koleksi');
    }
}
