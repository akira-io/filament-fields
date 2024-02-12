<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\InfoList;

use Filament\Infolists\Components\TextEntry;

class OwnerNameInfoListEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('owner.name')
            ->weight('bold')
            ->label('Operador');
    }
}
