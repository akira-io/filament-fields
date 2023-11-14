<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class NifFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('nif')
            ->label(__('akira-filament-fields::form.fields.nif'))
            ->required()
            ->maxLength(255);
    }
}
