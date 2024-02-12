<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields\RelationShip;

use Filament\Forms\Components\Select;

class OwnerRelationShipFormField
{
    public static function make(): Select
    {

        return RelationShipFormField::make('expense_type_id')
            ->label('operador')
            ->relationship('owner', 'name')
            ->required();
    }
}
