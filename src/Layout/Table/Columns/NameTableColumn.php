<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class NameTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('name')
            ->label(__('akira-filament-fields::table.columns.name'))
            ->searchable();

    }
}
