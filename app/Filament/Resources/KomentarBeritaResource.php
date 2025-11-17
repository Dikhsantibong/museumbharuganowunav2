<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KomentarBeritaResource\Pages;
use App\Filament\Resources\KomentarBeritaResource\RelationManagers;
use App\Models\KomentarBerita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KomentarBeritaResource extends Resource
{
    protected static ?string $model = KomentarBerita::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup = 'Blog';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('berita.judul')
                    ->label('Berita')
                    ->limit(40)
                    ->sortable(),

                Tables\Columns\TextColumn::make('komentar')
                    ->label('Komentar')
                    ->limit(50),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->dateTime('d M Y H:i'),
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
            'index' => Pages\ListKomentarBeritas::route('/'),
            // 'create' => Pages\CreateKomentarBerita::route('/create'),
            // 'edit' => Pages\EditKomentarBerita::route('/{record}/edit'),
        ];
    }
}
