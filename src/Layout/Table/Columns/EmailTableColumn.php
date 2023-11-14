<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class EmailTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('email')
            ->label(__('akira-filament-fields::table.columns.email'))
            ->badge()
            ->searchable();

    }
}
