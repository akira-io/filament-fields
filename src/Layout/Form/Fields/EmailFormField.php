<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class EmailFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('email')
            ->label(__('akira-filament-fields::form.fields.email'))
            ->unique(ignoreRecord: true)
            ->required()
            ->email();
    }
}
