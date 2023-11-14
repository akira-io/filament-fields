<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class DepartureTimeFormField
{
    public static function make(): TextInput
    {

        return TimeFormField::make('departure_time')
            ->label(__('akira-filament-fields::form.fields.departure_time'))
            ->required();

    }
}
