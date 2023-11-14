<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class CodeTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('code')
            ->label(__('akira-filament-fields::table.columns.code'))
            ->badge()
            ->searchable();

    }
}
