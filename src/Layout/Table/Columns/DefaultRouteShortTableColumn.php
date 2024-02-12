<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class DefaultRouteShortTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('defaultRoute.short_name')
            ->label('Rota')
            ->sortable()
            ->searchable();
    }
}
