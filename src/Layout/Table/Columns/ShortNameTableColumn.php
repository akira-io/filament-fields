<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class ShortNameTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('short_name')
            ->label(__('akira-filament-fields::table.columns.short_name'))
            ->badge()
            ->color('warning')
            ->searchable();

    }
}
