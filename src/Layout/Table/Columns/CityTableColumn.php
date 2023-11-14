<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class CityTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('city')
            ->label(__('akira-filament-fields::table.columns.city'))
            ->sortable()
            ->searchable();
    }
}
