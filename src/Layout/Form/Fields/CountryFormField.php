<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class CountryFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('country')
            ->label(__('akira-filament-fields::form.fields.country'))
            ->maxLength(255);
    }
}
