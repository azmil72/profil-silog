<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Berita';
    protected static ?string $modelLabel = 'Berita';
    protected static ?string $pluralModelLabel = 'Berita';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                
                Forms\Components\Textarea::make('excerpt')
                    ->label('Ringkasan')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                
                Forms\Components\RichEditor::make('content')
                    ->label('Konten')
                    ->required()
                    ->columnSpanFull(),
                
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('news')
                    ->visibility('public'),
                
                Forms\Components\Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'penghargaan' => 'Penghargaan',
                        'kerjasama' => 'Kerjasama',
                        'inovasi' => 'Inovasi',
                        'ekspansi' => 'Ekspansi',
                        'sosial' => 'Sosial',
                        'teknologi' => 'Teknologi'
                    ])
                    ->required(),
                
                Forms\Components\TextInput::make('author')
                    ->label('Penulis')
                    ->maxLength(255),
                
                Forms\Components\TagsInput::make('tags')
                    ->label('Tag'),
                
                Forms\Components\FileUpload::make('download_file')
                    ->label('File Download')
                    ->directory('news-files')
                    ->visibility('public'),
                
                Forms\Components\DatePicker::make('published_at')
                    ->label('Tanggal Publikasi')
                    ->required()
                    ->default(now()),
                
                Forms\Components\Toggle::make('is_published')
                    ->label('Dipublikasikan')
                    ->default(true),
                
                Forms\Components\Toggle::make('is_featured')
                    ->label('Unggulan')
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar'),
                
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                
                Tables\Columns\BadgeColumn::make('category')
                    ->label('Kategori')
                    ->colors([
                        'primary' => 'penghargaan',
                        'success' => 'kerjasama',
                        'warning' => 'inovasi',
                        'info' => 'ekspansi',
                        'secondary' => 'sosial',
                        'danger' => 'teknologi',
                    ]),
                
                Tables\Columns\TextColumn::make('author')
                    ->label('Penulis')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Tanggal Publikasi')
                    ->date()
                    ->sortable(),
                
                Tables\Columns\IconColumn::make('is_published')
                    ->label('Status')
                    ->boolean(),
                
                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Unggulan')
                    ->boolean(),
                
                Tables\Columns\TextColumn::make('views')
                    ->label('Views')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('Kategori')
                    ->options([
                        'penghargaan' => 'Penghargaan',
                        'kerjasama' => 'Kerjasama',
                        'inovasi' => 'Inovasi',
                        'ekspansi' => 'Ekspansi',
                        'sosial' => 'Sosial',
                        'teknologi' => 'Teknologi'
                    ]),
                
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Status Publikasi'),
                
                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Unggulan'),
            ])
            ->defaultSort('published_at', 'desc')
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}