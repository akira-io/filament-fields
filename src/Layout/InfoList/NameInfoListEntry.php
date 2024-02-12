<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\InfoList;

use Filament\Infolists\Components\TextEntry;

class NameInfoListEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('name')
            ->label('Nome')
            ->weight('bold');
    }
}
