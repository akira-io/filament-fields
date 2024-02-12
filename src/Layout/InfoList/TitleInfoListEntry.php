<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\InfoList;

use Filament\Infolists\Components\TextEntry;

class TitleInfoListEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('title')
            ->label('Título')
            ->weight('bold');
    }
}
