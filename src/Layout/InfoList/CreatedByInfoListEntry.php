<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\InfoList;

use Filament\Infolists\Components\TextEntry;

class CreatedByInfoListEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('createdBy.name')
            ->weight('bold')
            ->label('Criado por');
    }
}
