<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\ToggleColumn;

class IsActiveTableColumn
{
    public static function make(): ToggleColumn
    {

        return ToggleColumn::make('is_active')
            ->label(__('akira-filament-fields::table.columns.is_active'));

    }
}
