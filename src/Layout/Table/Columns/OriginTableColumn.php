<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class OriginTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('origin_id')
            ->label(__('akira-filament-fields::table.columns.origin'))
            ->searchable();

    }
}
