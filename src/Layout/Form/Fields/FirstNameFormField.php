<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class FirstNameFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('first_name')
            ->label(__('akira-filament-fields::form.fields.first_name'))
            ->required()
            ->maxLength(255);
    }
}
