<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class TitleTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('title')
            ->label(__('akira-filament-fields::table.columns.title'))
            ->searchable();

    }
}
