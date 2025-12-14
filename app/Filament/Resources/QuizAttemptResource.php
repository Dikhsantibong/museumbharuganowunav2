<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuizAttemptResource\Pages;
use App\Models\QuizAttempt;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class QuizAttemptResource extends Resource
{
    protected static ?string $model = QuizAttempt::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Peserta Quiz';
    protected static ?string $pluralLabel = 'Daftar Peserta Quiz';
    protected static ?string $navigationGroup = 'Quiz Management';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')
                ->label('Nama Peserta')
                ->required()
                ->maxLength(100),

            Forms\Components\TextInput::make('score')
                ->label('Score')
                ->numeric()
                ->disabled(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Peserta')
                    ->searchable()
                    ->sortable()
                    ->size('lg'),

                Tables\Columns\TextColumn::make('score')
                    ->label('Score')
                    ->sortable()
                    ->badge()
                    ->color(fn($state) => $state >= 800 ? 'success' : 'warning'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Waktu Tes')
                    ->dateTime('d M Y H:i'),

            ])
            ->defaultSort('score', 'desc')
            ->filters([
                Tables\Filters\Filter::make('Top Score')
                    ->query(fn($query) => $query->where('score', '>=', 800)),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuizAttempts::route('/'),
        ];
    }
}
