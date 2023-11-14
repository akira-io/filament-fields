<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class ZipCodeTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('zip_code')
            ->label(__('akira-filament-fields::table.columns.zip_code'))
            ->sortable()
            ->searchable();

    }
}
