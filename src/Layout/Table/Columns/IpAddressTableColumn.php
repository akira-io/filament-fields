<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class IpAddressTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('ip_address')
            ->label(__('akira-filament-fields::table.columns.ip_address'))
            ->badge()
            ->searchable();
    }
}
