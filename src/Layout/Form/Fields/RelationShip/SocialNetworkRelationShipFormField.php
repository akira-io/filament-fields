<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields\RelationShip;

use Filament\Forms\Components\Select;

class SocialNetworkRelationShipFormField
{
    public static function make(): Select
    {
        return RelationShipFormField::make('expense_type_id')
            ->label(__('akira-filament-fields::form.fields.social_network'))
            ->relationship('socialNetworkType', 'name');
    }
}
