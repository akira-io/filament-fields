<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class ServiceTitleTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('service.title')
            ->label(__('akira-filament-fields::table.columns.service'))
            ->sortable()
            ->searchable();
    }
}
