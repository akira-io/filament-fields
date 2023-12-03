<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class SocialNetworkNameTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('socialNetwork.name')
            ->label(__('akira-filament-fields::table.columns.social_network_name'))
            ->searchable();
    }
}
