<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class ReferenceFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('reference')
            ->label(__('akira-filament-fields::form.fields.reference'))
            ->maxLength(255)
            ->minValue(5)
            ->unique(ignoreRecord: true)
            ->required();

    }
}
