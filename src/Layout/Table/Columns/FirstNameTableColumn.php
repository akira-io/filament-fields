<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class FirstNameTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('first_name')
            ->label(__('akira-filament-fields::table.columns.first_name'))
            ->searchable();
    }
}
