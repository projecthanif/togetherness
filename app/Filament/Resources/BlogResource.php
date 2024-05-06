<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use App\Models\Tag;
use Carbon\Carbon;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action as ActionsAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieTagsColumn;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use League\CommonMark\Normalizer\SlugNormalizer;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('slug')
                    ->required()
                    ->string(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(50)
                    ->live()
                    ->afterStateUpdated(function (?string $state, Set $set) {
                        $slug = new SlugNormalizer();
                        $date = Carbon::now();
                        if ($state !== null) {
                            $set('slug', $slug->normalize($state . '-' . $date));
                        }
                    }),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                SpatieTagsInput::make('tags'),
                FileUpload::make('thumbnail')
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('S/N'),
                ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                SpatieTagsColumn::make('tags')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // ActionsAction::make('link')
                //     ->url(function () {
                //         return TextColumn::make('slug');
                //     })
                //     ->openUrlInNewTab()
                //     ->icon('heroicon-o-link')
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
