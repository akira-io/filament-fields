<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class LastNameFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('last_name')
            ->label(__('akira-filament-fields::form.fields.last_name'))
            ->required()
            ->maxLength(255);
    }
}
