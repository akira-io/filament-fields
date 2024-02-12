<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\InfoList;

use Filament\Infolists\Components\TextEntry;

class ConfirmedByInfoListEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('confirmedBy.name')
            ->label('Confirmado por')
            ->visible(fn ($record) => $record->is_confirmed);
    }
}
