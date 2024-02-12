<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\InfoList;

use Filament\Infolists\Components\TextEntry;

class ClosedDateInfoListEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('closed_date')
            ->label('Fechado em')
            ->badge()
            ->color('success');
    }
}
