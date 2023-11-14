<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class NameFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('name')
            ->label(__('akira-filament-fields::form.fields.name'))
            ->required()
            ->maxLength(255);
    }
}
