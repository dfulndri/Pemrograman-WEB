<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\EvaluationResource\Pages;
use App\Filament\Admin\Resources\EvaluationResource\RelationManagers;
use App\Models\Evaluation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class EvaluationResource extends Resource
{
    protected static ?string $model = Evaluation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('application_id')
                    ->label('Application_id')
                    ->relationship('application', 'id')
                    ->searchable()
                    ->required(),

                TextInput::make('score_academic')
                    ->label('Nilai Akademik')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->required(),

                TextInput::make('score_interview')
                    ->label('Nilai Wawancara')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->required(),

                Textarea::make('note')
                    ->label('Catatan')
                    ->rows(3),

                Select::make('status')
                    ->label('Status Akhir')
                    ->options([
                        'Lolos' => 'Lolos',
                        'Tidak Lolos' => 'Tidak Lolos',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('application.id')->label('ID Aplikasi'),
                TextColumn::make('score_academic')->label('Akademik'),
                TextColumn::make('score_interview')->label('Wawancara'),
                TextColumn::make('note')->label('Catatan')->limit(30),
                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'success' => 'Lolos',
                        'danger' => 'Tidak Lolos',
                    ]),
                TextColumn::make('created_at')->dateTime('d M Y'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEvaluations::route('/'),
            'create' => Pages\CreateEvaluation::route('/create'),
            'edit' => Pages\EditEvaluation::route('/{record}/edit'),
        ];
    }
}
