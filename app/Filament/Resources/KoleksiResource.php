<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Koleksi;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KoleksiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KoleksiResource\RelationManagers;

class KoleksiResource extends Resource
{
    protected static ?string $model = Koleksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('judul')->required(),
                Select::make('kategori')
                ->required()
                ->options([
                    'active' => 'active',
                    'handbouquet' => 'handbouquet',
                    'meja' => 'meja',
                    'standing' => 'standing',
                    'papan' => 'papan',
                    'pengantin' => 'pengantin',
                    'artificial' => 'artificial',
                    'lainnya' => 'lainnya',
                ])
                ->label('pilih kategori'),
                ])->columnSpan(1),

                Section::make("Gambar")
                        ->collapsible()
                        ->schema([
                            FileUpload::make('gambar')->disk('public')->directory('gambar'),
                    ])->columnSpan(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul'),
                TextColumn::make('kategori'),
                ImageColumn::make('gambar'),
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
            'index' => Pages\ListKoleksis::route('/'),
            'create' => Pages\CreateKoleksi::route('/create'),
            'edit' => Pages\EditKoleksi::route('/{record}/edit'),
        ];
    }
}
