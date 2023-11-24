<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class DescriptionTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('description')
            ->label(__('akira-filament-fields::table.columns.description'))
            ->limit(50);
    }
}
