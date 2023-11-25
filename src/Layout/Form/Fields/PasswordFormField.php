<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class PasswordFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('password')
            ->password()
            ->required()
            ->maxLength(255)
            ->label(__('akira-filament-fields::form.fields.password'));
    }
}
