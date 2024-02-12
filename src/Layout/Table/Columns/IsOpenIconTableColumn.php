<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\IconColumn;

class IsOpenIconTableColumn
{
    public static function make(): IconColumn
    {
        return IconColumn::make('is_open')
            ->label('Aberto')
            ->boolean();
    }
}
