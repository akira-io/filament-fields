<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class LocationTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('location')
            ->label(__('akira-filament-fields::table.columns.location'))
            ->searchable();
    }
}
