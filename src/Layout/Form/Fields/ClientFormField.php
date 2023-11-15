<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Akira\AkiraFilamentFields\Helpers\FormHelper;
use Akira\AkiraFilamentFields\Layout\Form\Fields\RelationShip\RelationShipFormField;
use Filament\Forms\Components\Select;

class ClientFormField
{
    public static function make(): Select
    {

        return RelationShipFormField::make('client_id')
            ->label(__('akira-filament-fields::form.fields.client'))
            ->relationship('client', 'name')
            ->createOptionForm([
                FormHelper::clientForm(),
            ]);
    }
}
