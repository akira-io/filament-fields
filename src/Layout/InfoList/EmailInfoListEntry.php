<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\InfoList;

use Filament\Infolists\Components\TextEntry;

class EmailInfoListEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('email')
            ->label('E-mail')
            ->badge()
            ->weight('bold');
    }
}
