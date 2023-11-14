<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\Toggle;

class IsActiveFormField
{
    public static function make(): Toggle
    {

        return Toggle::make('is_active')
            ->label(__('akira-filament-fields::form.fields.is_active'))
            ->required();

    }
}
