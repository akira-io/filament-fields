<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class AddressTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('address')
            ->label(__('akira-filament-fields::table.columns.address'))
            ->sortable()
            ->searchable();
    }
}
