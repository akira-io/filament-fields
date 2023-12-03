<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table;

use Filament\Tables\Columns\TextColumn;

class ClientNameTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('client.name')
            ->label(__('akira-filament-fields::table.columns.client_name'))
            ->sortable()
            ->searchable();
    }
}
