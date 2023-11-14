<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class AmountTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('amount')
            ->money('CVE')
            ->badge()
            ->label(__('akira-filament-fields::table.columns.amount'))
            ->color('success')
            ->sortable();
    }
}
