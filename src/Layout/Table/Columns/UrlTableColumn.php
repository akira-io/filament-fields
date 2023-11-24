<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class UrlTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('url')
            ->label(__('akira-filament-fields::table.columns.url'))
            ->searchable();
    }
}
