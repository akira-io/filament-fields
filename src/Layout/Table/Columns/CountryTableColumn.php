<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class CountryTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('country')
            ->label(__('akira-filament-fields::table.columns.country'))
            ->searchable();

    }
}
