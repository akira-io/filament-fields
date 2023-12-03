<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class LastNameTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('last_name')
            ->label(__('akira-filament-fields::table.columns.last_name'))
            ->searchable();
    }
}
