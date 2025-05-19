<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ScholarshipResource\Pages;
use App\Filament\Admin\Resources\ScholarshipResource\RelationManagers;
use App\Models\Scholarship;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;



class ScholarshipResource extends Resource
{
    protected static ?string $model = Scholarship::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\Textarea::make('description')->required(),

                DatePicker::make('start_date')
                    ->label('Tanggal Mulai')
                    ->required(),

                DatePicker::make('end_date')
                    ->label('Tanggal Selesai')
                    ->required(),

                Forms\Components\Select::make('type')
                    ->options([
                        'Akademik' => 'Akademik',
                        'Non-akademik' => 'Non-akademik',
                        'Afirmasi' => 'Afirmasi',
                    ])
                    ->required(),

                Forms\Components\Select::make('status')
                    ->options([
                        'Aktif' => 'Aktif',
                        'Tidak aktif' => 'Tidak aktif',
                    ])
                    ->required(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('name')
                    ->label('Nama Beasiswa')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->tooltip(fn($record) => $record->description),

                BadgeColumn::make('type')
                    ->label('Tipe')
                    ->colors([
                        'primary' => 'Akademik',
                        'warning' => 'Non-akademik',
                        'success' => 'Afirmasi',
                    ])
                    ->sortable(),

                TextColumn::make('start_date')
                    ->label('Mulai')
                    ->date()
                    ->sortable(),

                TextColumn::make('end_date')
                    ->label('Berakhir')
                    ->date()
                    ->sortable(),

                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'success' => 'Aktif',
                        'danger' => 'Tidak aktif',
                    ])
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i'),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d M Y H:i'),
            ])
            ->filters([])
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
            'index' => Pages\ListScholarships::route('/'),
            'create' => Pages\CreateScholarship::route('/create'),
            'edit' => Pages\EditScholarship::route('/{record}/edit'),
        ];
    }
}
