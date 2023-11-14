<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\Select;

class FareTypeFormField
{
    public static function make(): Select
    {

        return RelationFormField::make('fare_type_id')
            ->label(__('akira-filament-fields::form.fields.fare_type'))
            ->relationship('fareType', 'name')
            ->createOptionForm([
                CodeFormField::make(),
                NameFormField::make()->unique(ignoreRecord: true),
            ])
            ->required();
    }
}
