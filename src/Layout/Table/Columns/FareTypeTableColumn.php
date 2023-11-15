<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class FareTypeTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('fareType.name')
            ->label(__('akira-filament-fields::table.columns.fare_type'))
            ->badge()
            ->color('success')
            ->sortable();

    }
}
