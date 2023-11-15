<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields\RelationShip;

use Akira\AkiraFilamentFields\Layout\Form\Fields\NameFormField;
use Filament\Forms\Components\Select;

class RoleRelationShipFormField
{
    public static function make(): Select
    {

        return RelationShipFormField::make('roles')
            ->label(__('akira-filament-fields::form.fields.roles'))
            ->relationship('roles', 'name')
            ->createOptionForm([
                NameFormField::make(),
            ])
            ->multiple()
            ->required();
    }
}
