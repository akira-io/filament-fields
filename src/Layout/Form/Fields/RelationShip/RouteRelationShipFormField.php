<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields\RelationShip;

use Filament\Forms\Components\Select;

class RouteRelationShipFormField
{
    public static function make(): Select
    {

        return RelationShipFormField::make('route_id')
            ->label(__('akira-filament-fields::form.fields.route'))
            ->relationship('route', 'name')
            ->required();

    }
}
