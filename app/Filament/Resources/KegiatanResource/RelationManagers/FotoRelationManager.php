<?php

namespace App\Filament\Resources\KegiatanResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\RelationManagers\RelationManager;

class FotoRelationManager extends RelationManager
{
    protected static string $relationship = 'fotos';
    protected static ?string $title = 'Galeri Foto';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('foto')
                    ->image()
                    ->directory('kegiatan/foto')
                    ->label('Foto')
                    ->required(),

                Forms\Components\TextInput::make('caption')
                    ->label('Caption')
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Foto')
                    ->square(),

                Tables\Columns\TextColumn::make('caption')
                    ->label('Caption')
                    ->limit(50),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Upload')
                    ->date('d M Y'),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Tambah Foto'),
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
            ]);
    }
}
