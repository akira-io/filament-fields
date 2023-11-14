<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\ImageColumn;

class AvatarTableColumn
{
    public static function make(): ImageColumn
    {

        return ImageColumn::make('avatar')
            ->label(__('akira-filament-fields::table.columns.avatar'))
            ->searchable();
    }
}
