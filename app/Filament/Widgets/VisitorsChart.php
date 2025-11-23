<?php

namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;
use App\Models\Pengunjung;

class VisitorsChart extends LineChartWidget
{
    protected static ?string $heading = 'Grafik Pengunjung Per Bulan';

    protected function getData(): array
    {
        $data = Pengunjung::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan');

        return [
            'datasets' => [
                [
                    'label' => 'Pengunjung',
                    'data' => $data->values(),
                ],
            ],
            'labels' => $data->keys(),
        ];
    }
}
