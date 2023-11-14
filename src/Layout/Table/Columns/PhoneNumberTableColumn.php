<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class PhoneNumberTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('phone_number')
            ->label(__('akira-filament-fields::table.columns.phone'))
            ->sortable()
            ->searchable();
    }
}
