<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatsOverview;
use App\Filament\Widgets\acKegiatanChart;
use App\Filament\Widgets\zaPublishStatusChart;
use App\Filament\Widgets\bLatestGalleryWidget;

class Dashboard extends BaseDashboard
{
    // protected static ?string $navigationLabel = 'Dashboard';
    // protected static ?string $title = 'Dashboard Utama';
    protected static ?string $navigationIcon = 'heroicon-o-home';

    public function getWidgets(): array
    {
        return [
            // dibiarkan kosong karena layout sudah diatur manual
        ];
    }

    public function getWidgetLayout(): array
    {
        return [
            'stats' => [
                StatsOverview::class, // selalu paling atas
            ],
            'charts' => [
                zaPublishStatusChart::class,
                acKegiatanChart::class,
                bLatestGalleryWidget::class,
            ],
            'gallery' => [],
        ];
    }


    public static function canAccess(): bool
    {
        return true;
    }
}
