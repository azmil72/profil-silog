<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BoardMemberResource\Pages;
use App\Models\BoardMember;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BoardMemberResource extends Resource
{
    protected static ?string $model = BoardMember::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Direksi & Komisaris';
    protected static ?string $modelLabel = 'Anggota Dewan';
    protected static ?string $pluralModelLabel = 'Direksi & Komisaris';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('position')
                    ->label('Jabatan')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\Select::make('type')
                    ->label('Tipe')
                    ->options([
                        'direksi' => 'Direksi',
                        'komisaris' => 'Komisaris'
                    ])
                    ->required(),
                
                Forms\Components\FileUpload::make('image')
                    ->label('Foto')
                    ->image()
                    ->directory('board-members')
                    ->visibility('public')
                    ->maxSize(20480),
                
                Forms\Components\Textarea::make('profile')
                    ->label('Profil Singkat')
                    ->rows(4)
                    ->columnSpanFull(),
                
                Forms\Components\Repeater::make('experiences')
                    ->label('Pengalaman Kerja')
                    ->schema([
                        Forms\Components\TextInput::make('year')
                            ->label('Tahun')
                            ->required(),
                        Forms\Components\TextInput::make('title')
                            ->label('Jabatan')
                            ->required(),
                        Forms\Components\TextInput::make('institution')
                            ->label('Institusi')
                            ->required(),
                    ])
                    ->columns(3)
                    ->columnSpanFull(),
                
                Forms\Components\Repeater::make('educations')
                    ->label('Pendidikan')
                    ->schema([
                        Forms\Components\TextInput::make('year')
                            ->label('Tahun')
                            ->required(),
                        Forms\Components\TextInput::make('title')
                            ->label('Gelar')
                            ->required(),
                        Forms\Components\TextInput::make('institution')
                            ->label('Institusi')
                            ->required(),
                    ])
                    ->columns(3)
                    ->columnSpanFull(),
                
                Forms\Components\TextInput::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0),
                
                Forms\Components\Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Foto')
                    ->circular(),
                
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('position')
                    ->label('Jabatan')
                    ->searchable(),
                
                Tables\Columns\BadgeColumn::make('type')
                    ->label('Tipe')
                    ->colors([
                        'primary' => 'direksi',
                        'success' => 'komisaris',
                    ])
                    ->formatStateUsing(fn (string $state): string => ucfirst($state)),
                
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),
                
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->label('Tipe')
                    ->options([
                        'direksi' => 'Direksi',
                        'komisaris' => 'Komisaris'
                    ]),
                
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif'),
            ])
            ->defaultSort('sort_order')
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
            'index' => Pages\ListBoardMembers::route('/'),
            'create' => Pages\CreateBoardMember::route('/create'),
            'edit' => Pages\EditBoardMember::route('/{record}/edit'),
        ];
    }
}