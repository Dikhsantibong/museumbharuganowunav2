<?php

namespace App\Filament\Widgets;

use Filament\Widgets\PieChartWidget;
use App\Models\Berita;
use App\Models\Kegiatan;

class PublishStatusChart extends PieChartWidget
{
    protected static ?string $heading = 'Status Publish Konten';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'data' => [
                        Berita::where('status', 'Publish')->count() +
                            Kegiatan::where('status', 'Publish')->count(),

                        Berita::where('status', 'Draft')->count() +
                            Kegiatan::where('status', 'Draft')->count(),
                    ],
                ],
            ],
            'labels' => ['Publish', 'Draft'],
        ];
    }
}
