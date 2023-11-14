<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class PriceTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('price')
            ->money('CVE')
            ->label(__('akira-filament-fields::table.columns.price'))
            ->badge()
            ->color('success')
            ->sortable();
    }
}
