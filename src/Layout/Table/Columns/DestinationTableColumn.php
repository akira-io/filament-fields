<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class DestinationTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('destination_id')
            ->label(__('akira-filament-fields::table.columns.destination'))
            ->searchable()
            ->sortable();

    }
}
