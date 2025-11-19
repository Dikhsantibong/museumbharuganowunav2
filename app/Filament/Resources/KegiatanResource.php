<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KegiatanResource\Pages;
use App\Filament\Resources\KegiatanResource\RelationManagers\FotoRelationManager;
use App\Models\Kegiatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KegiatanResource extends Resource
{
    protected static ?string $model = Kegiatan::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Kegiatan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn($state, callable $set) =>
                        $set('slug', \Str::slug($state))
                    ),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->disabled()
                    ->dehydrated(),

                Forms\Components\FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->directory('kegiatan/thumbnail'),

                Forms\Components\TextInput::make('lokasi')
                    ->label('Lokasi'),

                Forms\Components\DatePicker::make('tanggal_mulai')
                    ->label('Tanggal Mulai'),

                Forms\Components\DatePicker::make('tanggal_selesai')
                    ->label('Tanggal Selesai'),

                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'Draft' => 'Draft',
                        'Publish' => 'Publish',
                    ])
                    ->default('Draft'),

                Forms\Components\RichEditor::make('deskripsi')
                    ->label('Deskripsi')
                    ->columnSpanFull(),

                // ==============================
                //   GALERI FOTO KEGIATAN
                // ==============================
                Forms\Components\Repeater::make('fotos')
                    ->label('Galeri Foto')
                    ->relationship('fotos')   // penting!
                    ->schema([
                        Forms\Components\FileUpload::make('foto')
                            ->label('Foto')
                            ->image()
                            ->directory('kegiatan/foto')
                            ->required(),

                        Forms\Components\TextInput::make('caption')
                            ->label('Caption Foto')
                            ->maxLength(255),
                    ])
                    ->columnSpanFull()
                    ->collapsible()
                    ->defaultItems(0)
                    ->addActionLabel('Tambah Foto')
                    ->visible(fn($livewire) => $livewire instanceof \App\Filament\Resources\KegiatanResource\Pages\CreateKegiatan)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->square(),

                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->sortable()
                    ->limit(40),

                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->date('d M Y'),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(
                        fn($state) =>
                        $state === 'Publish' ? 'Publish' : 'Draft'
                    )
                    ->icon(
                        fn($state) =>
                        $state === 'Publish'
                            ? 'heroicon-o-check-circle'
                            : 'heroicon-o-x-circle'
                    )
                    ->color(
                        fn($state) =>
                        $state === 'Publish' ? 'success' : 'danger'
                    ),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Update')
                    ->date('d M Y'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            FotoRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKegiatans::route('/'),
            'create' => Pages\CreateKegiatan::route('/create'),
            'edit' => Pages\EditKegiatan::route('/{record}/edit'),
        ];
    }
}
