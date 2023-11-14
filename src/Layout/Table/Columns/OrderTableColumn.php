<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\ToggleColumn;

class OrderTableColumn
{
    public static function make(): ToggleColumn
    {

        return ToggleColumn::make('is_drop_down')
            ->label(__('akira-filament-fields::table.columns.order'));
    }
}
