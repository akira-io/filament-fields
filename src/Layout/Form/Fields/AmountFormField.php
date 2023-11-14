<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class AmountFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('amount')
            ->label(__('akira-filament-fields::form.fields.amount'))
            ->required()
            ->numeric()
            ->prefix('$');

    }
}
