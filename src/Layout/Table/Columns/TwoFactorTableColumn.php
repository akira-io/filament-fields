<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class TwoFactorTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('two_factor_code')
            ->label('Código 2FA')
            ->searchable();
    }
}
