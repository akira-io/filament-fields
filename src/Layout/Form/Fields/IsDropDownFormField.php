<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\Toggle;

class IsDropDownFormField
{
    public static function make(): Toggle
    {

        return Toggle::make('is_drop_down')
            ->label(__('akira-filament-fields::form.fields.is_drop_down'))
            ->required();

    }
}
