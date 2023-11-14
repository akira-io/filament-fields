<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\TextInput;

class ArrivalTimeFormField
{
    public static function make(): TextInput
    {

        return TimeFormField::make('arrival_time')
            ->label(__('akira-filament-fields::form.fields.arrival_time'))
            ->required();

    }
}
