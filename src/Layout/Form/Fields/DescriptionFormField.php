<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\Textarea;

class DescriptionFormField
{
    public static function make(): Textarea
    {

        return Textarea::make('description')
            ->label(__('akira-filament-fields::form.fields.description'))
            ->maxLength(255);

    }
}
