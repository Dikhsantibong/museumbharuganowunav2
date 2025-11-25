<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuizQuestionResource\Pages;
use App\Models\QuizQuestion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class QuizQuestionResource extends Resource
{
    protected static ?string $model = QuizQuestion::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Soal Quiz';
    protected static ?string $modelLabel = 'Soal Quiz';
    protected static ?string $pluralModelLabel = 'Bank Soal Quiz';
    protected static ?string $navigationGroup = 'Quiz Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Textarea::make('question')
                    ->label('Pertanyaan')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('option_a')
                    ->label('Pilihan A')
                    ->required(),

                Forms\Components\TextInput::make('option_b')
                    ->label('Pilihan B')
                    ->required(),

                Forms\Components\TextInput::make('option_c')
                    ->label('Pilihan C')
                    ->required(),

                Forms\Components\TextInput::make('option_d')
                    ->label('Pilihan D')
                    ->required(),

                Forms\Components\Select::make('correct_answer')
                    ->label('Jawaban Benar')
                    ->required()
                    ->options([
                        'A' => 'A',
                        'B' => 'B',
                        'C' => 'C',
                        'D' => 'D',
                    ])
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('question')
                    ->label('Pertanyaan')
                    ->limit(50)
                    ->searchable(),

                Tables\Columns\TextColumn::make('correct_answer')
                    ->label('Jawaban Benar')
                    ->badge()
                    ->color('success'),

                // Tables\Columns\TextColumn::make('created_at')
                //     ->label('Dibuat')
                //     ->dateTime('d M Y'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuizQuestions::route('/'),
            'create' => Pages\CreateQuizQuestion::route('/create'),
            'edit' => Pages\EditQuizQuestion::route('/{record}/edit'),
        ];
    }
}
