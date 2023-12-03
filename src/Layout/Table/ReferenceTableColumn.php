<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table;

use Filament\Tables\Columns\TextColumn;

class ReferenceTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('reference')
            ->label(__('akira-filament-fields::table.columns.reference'))
            ->sortable()
            ->searchable();
    }
}
