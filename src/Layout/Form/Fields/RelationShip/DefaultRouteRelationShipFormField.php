<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields\RelationShip;

use Filament\Forms\Components\Select;

class DefaultRouteRelationShipFormField
{
    public static function make(): Select
    {

        return RelationShipFormField::make('default_route_id')
            ->label('Rota pré-defenida')
            ->relationship('defaultRoute', 'name');
    }
}
