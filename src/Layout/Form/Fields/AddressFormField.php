<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class AddressFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('address')
            ->label(__('akira-filament-fields::form.fields.address'))
            ->maxLength(255);
    }
}
