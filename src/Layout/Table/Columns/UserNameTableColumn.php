<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class UserNameTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('user_name')
            ->label(__('akira-filament-fields::table.columns.user_name'))
            ->sortable()
            ->searchable();
    }
}
