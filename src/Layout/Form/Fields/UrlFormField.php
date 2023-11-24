<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class UrlFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('url')
            ->label(__('akira-filament-fields::form.fields.url'))
            ->required()
            ->url();
    }
}
