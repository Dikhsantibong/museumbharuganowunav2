<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KoleksiResource\Pages;
use App\Models\Koleksi;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class KoleksiResource extends Resource
{
    protected static ?string $model = Koleksi::class;

    // protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Koleksi Museum';
    protected static ?string $modelLabel = 'Koleksi';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([

                TextInput::make('nama_koleksi')
                    ->label('Nama Koleksi')
                    ->required()
                    ->maxLength(150),

                TextInput::make('tahun_pembuatan')
                    ->label('Tahun Pembuatan')
                    ->numeric()
                    ->minValue(1000)
                    ->maxValue(date('Y'))
                    ->nullable(),

                TextInput::make('tempat_perolehan')
                    ->label('Tempat Perolehan')
                    ->maxLength(150)
                    ->nullable(),

                DatePicker::make('tanggal_masuk')
                    ->label('Tanggal Masuk')
                    ->nullable(),

                TextInput::make('cara_perolehan')
                    ->label('Cara Perolehan')
                    ->maxLength(150)
                    ->nullable(),

                TextInput::make('jenis_koleksi')
                    ->label('Jenis Koleksi')
                    ->maxLength(100)
                    ->nullable(),

                Textarea::make('uraian')
                    ->label('Uraian')
                    ->rows(4)
                    ->nullable(),

                // === REPEATER FOTO === //
                Repeater::make('foto')
                    ->relationship('foto') // relasi ke FotoKoleksi
                    ->label('Foto Koleksi')
                    ->schema([

                        FileUpload::make('foto')
                            ->label('Foto')
                            ->image()
                            ->directory('foto-koleksi')
                            ->required(),

                        TextInput::make('sumber')
                            ->label('Sumber Dokumentasi')
                            ->maxLength(255)
                            ->nullable(),
                    ])
                    ->columns(2)
                    ->collapsible()
                    ->defaultItems(0),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto.foto')
                    ->label('Foto')
                    ->circular()
                    ->limit(1), // tampilkan hanya foto pertama

                TextColumn::make('nama_koleksi')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('jenis_koleksi')
                    ->label('Jenis')
                    ->searchable(),

                TextColumn::make('tahun_pembuatan')
                    ->label('Tahun')
                    ->sortable(),

                TextColumn::make('uraian')
                    ->label('Uraian')
                    ->sortable(),
            ])
            ->searchable()
            ->defaultSort('id_koleksi', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKoleksis::route('/'),
            'create' => Pages\CreateKoleksi::route('/create'),
            'edit' => Pages\EditKoleksi::route('/{record}/edit'),
        ];
    }
}
