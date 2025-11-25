<?php

namespace App\Providers;

use App\Models\Berita;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $beritaTerbaru = Berita::where('status', 'publish')
                ->orderBy('created_at', 'desc')
                ->limit(5)
                ->get();

            $kegiatanTerakhir = Kegiatan::orderBy('created_at', 'desc')
                ->limit(5)
                ->get();

            $view->with([
                'beritaTerbaru' => $beritaTerbaru,
                'kegiatanTerakhir' => $kegiatanTerakhir,
            ]);
        });
    }
}
