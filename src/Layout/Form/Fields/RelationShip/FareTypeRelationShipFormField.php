<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields\RelationShip;

use Akira\AkiraFilamentFields\Layout\Form\Fields\CodeFormField;
use Akira\AkiraFilamentFields\Layout\Form\Fields\NameFormField;
use Filament\Forms\Components\Select;

class FareTypeRelationShipFormField
{
    public static function make(): Select
    {

        return RelationShipFormField::make('fare_type_id')
            ->label(__('akira-filament-fields::form.fields.fare_type'))
            ->relationship('fareType', 'name')
            ->createOptionForm([
                CodeFormField::make(),
                NameFormField::make()->unique(ignoreRecord: true),
            ])
            ->required();
    }
}
