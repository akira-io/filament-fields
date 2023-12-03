<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class NifTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('nif')
            ->label(__('akira-filament-fields::table.columns.nif'))
            ->numeric()
            ->badge()
            ->searchable();

    }
}
