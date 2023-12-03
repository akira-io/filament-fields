<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\ToggleColumn;

class IsCompanyTableColumn
{
    public static function make(): ToggleColumn
    {

        return ToggleColumn::make('is_company')
            ->label(__('akira-filament-fields::table.columns.is_company'));

    }
}
