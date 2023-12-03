<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class ExpenseTypeNameTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('expenseType.name')
            ->label(__('akira-filament-fields::table.columns.expenses_type_name'))
            ->badge()
            ->sortable()
            ->searchable();
    }
}
