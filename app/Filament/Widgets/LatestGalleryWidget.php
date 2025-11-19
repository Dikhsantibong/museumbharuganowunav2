<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\KegiatanFoto;

class LatestGalleryWidget extends Widget
{
    protected static string $view = 'filament.widgets.latest-gallery';

    protected static ?string $heading = 'Galeri Terbaru';

    // publik agar blade bisa mengakses langsung $fotos
    public $fotos = null;

    // mount() akan dipanggil sebelum render, isi data di sini
    public function mount(): void
    {
        $this->fotos = KegiatanFoto::latest()->take(6)->get();
    }

    // jika butuh method tambahan untuk view
    public function getData(): array
    {
        return [
            'fotos' => $this->fotos,
        ];
    }
}
