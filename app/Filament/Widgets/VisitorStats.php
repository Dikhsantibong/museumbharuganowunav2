<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\VisitorLog;
use Carbon\Carbon;

class VisitorStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pengunjung Hari Ini', VisitorLog::whereDate('tanggal', today())->count())
                ->icon('heroicon-o-user-group')
                ->color('success'),

            Stat::make('Pengunjung Bulan Ini', VisitorLog::whereMonth('tanggal', now()->month)->count())
                ->icon('heroicon-o-calendar-days')
                ->color('primary'),

            Stat::make('Total Pengunjung', VisitorLog::count())
                ->icon('heroicon-o-chart-bar')
                ->color('warning'),
        ];
    }
}
