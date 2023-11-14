<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Repeaters;

use Closure;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\Support\Arrayable;

class ContactFormRepeater
{
    public static function make(array | Arrayable | string | Closure | null $options): Repeater
    {

        return
            Repeater::make('contacts')
                ->label(__('akira-filament-fields::form.fields.contacts'))
                ->relationship()
                ->schema([
                    Select::make('contact_type_id')
                        ->label(__('akira-filament-fields::form.fields.contact_type'))
                        ->options($options)
                        ->searchable()
                        ->required(),

                    TextInput::make('value')->required(),
                ])->addActionLabel(__('akira-filament-fields::form.actions.add_contact'));
    }
}
