<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class OrderFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('order')
            ->label(__('akira-filament-fields::form.fields.order'))
            ->numeric();
    }
}
