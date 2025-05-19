<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ApplicationResource\Pages;
use App\Models\Application;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\BadgeColumn;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->label('Mahasiswa')
                    ->relationship('user', 'name')
                    ->required(),

                Select::make('scholarship_id')
                    ->label('Beasiswa')
                    ->relationship('scholarship', 'name')
                    ->required(),

                FileUpload::make('document')
                    ->label('Dokumen (PDF/DOCX)')
                    ->directory('documents')
                    ->preserveFilenames()
                    ->acceptedFileTypes([
                        'application/pdf',
                        'application/msword',
                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    ])
                    ->maxSize(2048) // dalam KB, jadi 2048KB = 2MB
                    ->required(),

                TextInput::make('gpa')
                    ->label('IPK')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(4)
                    ->step(0.01)
                    ->required(),

                TextInput::make('semester')
                    ->label('Semester')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(14)
                    ->required(),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'Baru' => 'Baru',
                        'Diverifikasi' => 'Diverifikasi',
                        'Ditolak' => 'Ditolak',
                        'Diterima' => 'Diterima',
                    ])
                    ->default('Baru')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('user.name')->label('Mahasiswa'),
                TextColumn::make('scholarship.name')->label('Beasiswa'),
                TextColumn::make('gpa')->label('IPK'),
                TextColumn::make('semester')->label('Semester'),
                TextColumn::make('document')
                    ->label('Dokumen')
                    ->url(fn($record) => Storage::url($record->document))
                    ->openUrlInNewTab()
                    ->limit(20),
                BadgeColumn::make('status')
                    ->colors([
                        'primary' => 'Baru',
                        'warning' => 'Diverifikasi',
                        'danger' => 'Ditolak',
                        'success' => 'Diterima',
                    ])
                    ->label('Status'),
                TextColumn::make('created_at')->dateTime('d M Y')->label('Tanggal Daftar'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListApplications::route('/'),
            'create' => Pages\CreateApplication::route('/create'),
            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }
}
