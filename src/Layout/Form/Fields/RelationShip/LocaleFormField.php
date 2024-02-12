<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields\RelationShip;

use Filament\Forms\Components\TextInput;

class LocaleFormField
{
    public static function make(): TextInput
    {

        return TextInput::make('locale')
            ->label('Idioma')
            ->default('pt')
            ->maxLength(191);
    }
}
