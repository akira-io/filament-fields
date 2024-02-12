<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class ClosedDateTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('closed_date')
            ->label('Data de Fecho')
            ->badge()
            ->color('success')
            ->date(config('akira-filament-fields.date_format'));
    }
}
