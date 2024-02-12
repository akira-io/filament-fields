<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\InfoList;

use Filament\Infolists\Components\TextEntry;

class CreatedAtInfoListEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('created_at')
            ->label('Criado em')
            ->badge()
            ->color('success');
    }
}
