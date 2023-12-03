<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields\RelationShip;

use Filament\Forms\Components\Select;

class ServiceRelationShipFormField
{
    public static function make(): Select
    {

        return RelationShipFormField::make('service_id')
            ->label(__('akira-filament-fields::form.fields.service'))
            ->relationship('service', 'title');

    }
}
