<?php

namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;
use App\Models\Kegiatan;

class KegiatanChart extends LineChartWidget
{
    protected static ?string $heading = 'Grafik Kegiatan Per Bulan';

    protected function getData(): array
    {
        // Ambil jumlah kegiatan per bulan
        $data = Kegiatan::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan');

        // Label nama bulan
        $labels = $data->keys()->map(function ($bulan) {
            return date('F', mktime(0, 0, 0, $bulan, 1));
        });

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Kegiatan',
                    'data' => $data->values(),
                ],
            ],
            'labels' => $labels,
        ];
    }
}
