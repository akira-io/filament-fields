<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\InfoList;

use Filament\Infolists\Components\TextEntry;

class DefaultRouteShortNameInfoListEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('defaultRoute.short_name')
            ->label('Rota pré-defenida')
            ->weight('bold');
    }
}
