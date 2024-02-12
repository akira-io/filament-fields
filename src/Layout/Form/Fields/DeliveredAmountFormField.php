<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class DeliveredAmountFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('delivered_amount')
            ->label('Monto entregado')
            ->required()
            ->numeric()
            ->prefix('$');

    }
}
