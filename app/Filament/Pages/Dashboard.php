<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatsOverview;
use App\Filament\Widgets\KegiatanChart;
use App\Filament\Widgets\PublishStatusChart;
use App\Filament\Widgets\LatestGalleryWidget;

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
                KegiatanChart::class,
                PublishStatusChart::class,
            ],
            'gallery' => [
                LatestGalleryWidget::class,
            ],
        ];
    }


    public static function canAccess(): bool
    {
        return true;
    }
}
