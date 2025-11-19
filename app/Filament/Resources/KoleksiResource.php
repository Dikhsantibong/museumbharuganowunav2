<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KoleksiResource\Pages;
use App\Models\Koleksi;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Resource;

class KoleksiResource extends Resource
{
    protected static ?string $model = Koleksi::class;
    protected static ?string $navigationIcon = 'heroicon-o-archive-box';
    protected static ?string $navigationLabel = 'Koleksi Museum';
    protected static ?string $modelLabel = 'Koleksi';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([

            Section::make('Informasi Utama')
                ->description('Isi informasi dasar mengenai koleksi museum.')
                ->schema([
                    Grid::make(2)->schema([

                        TextInput::make('nama_koleksi')
                            ->label('Nama Koleksi')
                            ->required()
                            ->maxLength(150),

                        TextInput::make('jenis_koleksi')
                            ->label('Jenis Koleksi')
                            ->maxLength(100)
                            ->nullable(),

                        TextInput::make('tahun_pembuatan')
                            ->label('Tahun Pembuatan')
                            ->numeric()
                            ->minValue(1000)
                            ->maxValue(date('Y'))
                            ->nullable(),

                        DatePicker::make('tanggal_masuk')
                            ->label('Tanggal Masuk')
                            ->nullable(),

                    ]),

                    Textarea::make('uraian')
                        ->label('Uraian / Deskripsi')
                        ->rows(4)
                        ->nullable(),
                ])
                ->collapsible(),

            Section::make('Informasi Perolehan')
                ->collapsed()
                ->schema([
                    Grid::make(2)->schema([

                        TextInput::make('tempat_perolehan')
                            ->label('Tempat Perolehan')
                            ->maxLength(150)
                            ->nullable(),

                        TextInput::make('cara_perolehan')
                            ->label('Cara Perolehan')
                            ->maxLength(150)
                            ->nullable(),

                    ]),
                ]),

            Section::make('Foto Koleksi')
                ->description('Upload beberapa foto yang terkait dengan koleksi ini.')
                ->schema([
                    Repeater::make('foto')
                        ->relationship('foto')
                        ->label('Daftar Foto')
                        ->schema([

                            FileUpload::make('foto')
                                ->label('Foto')
                                ->required()
                                ->image()
                                ->maxSize(2048)
                                ->directory('foto-koleksi'),

                            TextInput::make('sumber')
                                ->label('Sumber Dokumentasi')
                                ->maxLength(255)
                                ->nullable(),

                        ])
                        ->columns(2)
                        ->collapsible()
                        ->defaultItems(0),
                ]),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([

            // FOTO PERTAMA
            ImageColumn::make('foto')
                ->label('Foto')
                ->getStateUsing(
                    fn($record) =>
                    $record->foto->first()->foto ?? null
                )
                ->circular()
                ->size(50),

            TextColumn::make('nama_koleksi')
                ->label('Nama Koleksi')
                ->searchable()
                ->sortable(),

            TextColumn::make('jenis_koleksi')
                ->label('Jenis')
                ->sortable()
                ->searchable(),

            TextColumn::make('tahun_pembuatan')
                ->label('Tahun Pembuatan')
                ->sortable(),

            TextColumn::make('tanggal_masuk')
                ->label('Masuk')
                ->date('d M Y')
                ->sortable(),

            TextColumn::make('uraian')
                ->label('Uraian')
                ->limit(40),

        ])
            ->defaultSort('id_koleksi', 'desc')
            ->searchable()
            ->filters([]);
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
