<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class TitleFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('title')
            ->label(__('akira-filament-fields::form.fields.title'))
            ->required()
            ->autofocus();
    }
}
