<?php

namespace App\Filament\Resources\BeritaResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\RelationManagers\RelationManager;

class KomentarBeritaRelationManager extends RelationManager
{
    protected static string $relationship = 'komentar'; // relasi di model Berita
    protected static ?string $title = 'Komentar Berita';

    public function form(Form $form): Form
    {
        return $form->schema([]);
        // dikosongkan karena tidak boleh edit
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('komentar')
                    ->label('Isi Komentar')
                    ->wrap()
                    ->limit(80),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'approved' => 'success',
                        'rejected' => 'danger',
                        'pending'  => 'warning',
                        default    => 'gray',
                    }),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->dateTime('d M Y H:i'),
            ])
            ->headerActions([
                // ❌ Tidak ada tombol tambah
            ])
            ->actions([
                Tables\Actions\DeleteAction::make()->label('Hapus') // ✅ hanya hapus
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
