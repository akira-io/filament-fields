<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class PriceFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('price')
            ->label(__('akira-filament-fields::form.fields.price'))
            ->required()
            ->numeric()
            ->prefix('$');

    }
}
