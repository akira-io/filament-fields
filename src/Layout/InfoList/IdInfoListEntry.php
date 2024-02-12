<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\InfoList;

use Filament\Infolists\Components\TextEntry;

class IdInfoListEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('id')
            ->label('ID')
            ->badge()
            ->weight('bold')
            ->color('success');
    }
}
