<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\InfoList;

use Filament\Infolists\Components\TextEntry;

class AmountInfoListEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('amount')
            ->label('Valor')
            ->money('CVE')
            ->badge()
            ->weight('bold')
            ->color('success');
    }
}
