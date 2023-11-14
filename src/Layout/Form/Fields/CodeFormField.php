<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class CodeFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('code')
            ->label(__('akira-filament-fields::form.fields.code'))
            ->unique(ignoreRecord: true)
            ->required()
            ->maxLength(255);

    }
}
