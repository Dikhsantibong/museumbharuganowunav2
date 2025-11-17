<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('judul')
                ->label('Judul')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(function ($state, callable $set) {
                    $set('slug', \Str::slug($state));
                }),

            Forms\Components\TextInput::make('slug')
                ->label('Slug')
                ->disabled()
                ->dehydrated()
                ->required(),

            Forms\Components\Select::make('id_kategori')
                ->relationship('kategori', 'nama_kategori')
                ->label('Kategori')
                ->required(),

            // 🔥 STATUS BERITA
            Forms\Components\Select::make('status')
                ->label('Status Berita')
                ->options([
                    'draft'   => 'Draft',
                    'publish' => 'Publish',
                ])
                ->default('draft')
                ->required(),

            Forms\Components\FileUpload::make('thumbnail')
                ->label('Thumbnail')
                ->image()
                ->directory('berita/thumbnail'),

            Forms\Components\DatePicker::make('tanggal_publikasi')
                ->label('Tanggal Publikasi'),

            Forms\Components\RichEditor::make('konten')
                ->label('Isi Berita')
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Foto')
                    ->square(),

                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul')
                    ->limit(40)
                    ->searchable(),

                Tables\Columns\TextColumn::make('kategori.nama_kategori')
                    ->label('Kategori')
                    ->sortable(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(function ($state) {
                        return ucfirst($state); // tampilkan teks Publish / Draft
                    })
                    ->icon(function ($state) {
                        return strtolower($state) === 'publish'
                            ? 'heroicon-o-check-circle'
                            : 'heroicon-o-x-circle';
                    })
                    ->iconColor(function ($state) {
                        return strtolower($state) === 'publish'
                            ? 'success'
                            : 'danger';
                    })
                    ->sortable(),


                Tables\Columns\TextColumn::make('tanggal_publikasi')
                    ->label('Publikasi')
                    ->date('d M Y'),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->date('d M Y'),
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
