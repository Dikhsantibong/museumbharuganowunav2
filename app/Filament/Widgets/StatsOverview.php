<?php

namespace App\Filament\Widgets;

use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Koleksi;
use App\Models\KomentarBerita;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Berita', Berita::count())
                ->description('Berita yang tersedia')
                ->descriptionIcon('heroicon-o-newspaper')
                ->color('primary'),

            Stat::make('Total Kegiatan', Kegiatan::count())
                ->description('Kegiatan terdaftar')
                ->descriptionIcon('heroicon-o-calendar')
                ->color('success'),

            Stat::make('Total Koleksi', Koleksi::count())
                ->description('Koleksi museum')
                ->descriptionIcon('heroicon-o-archive-box')
                ->color('amber'),

            Stat::make('Komentar Masuk', KomentarBerita::count())
                ->description('Komentar pengunjung')
                ->descriptionIcon('heroicon-o-chat-bubble-left-right')
                ->color('danger'),
        ];
    }
}
