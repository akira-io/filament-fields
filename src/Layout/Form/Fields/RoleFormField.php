<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\Select;

class RoleFormField
{
    public static function make(): Select
    {

        return RelationFormField::make('roles')
            ->label(__('akira-filament-fields::form.fields.roles'))
            ->relationship('roles', 'name')
            ->createOptionForm([
                NameFormField::make(),
            ])
            ->multiple()
            ->required();
    }
}
