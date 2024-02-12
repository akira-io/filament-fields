<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class CreatedByTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('createdBy.name')
            ->label('Criado por')
            ->numeric()
            ->badge()
            ->sortable();

    }
}
