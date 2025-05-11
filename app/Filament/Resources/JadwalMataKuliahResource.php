<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalMataKuliahResource\Pages;
use App\Filament\Resources\JadwalMataKuliahResource\RelationManagers;
use App\Models\JadwalMataKuliah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalMataKuliahResource extends Resource
{
    protected static ?string $model = JadwalMataKuliah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListJadwalMataKuliahs::route('/'),
            'create' => Pages\CreateJadwalMataKuliah::route('/create'),
            'edit' => Pages\EditJadwalMataKuliah::route('/{record}/edit'),
        ];
    }
}
