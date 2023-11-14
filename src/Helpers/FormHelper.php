<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Helpers;

use Akira\AkiraFilamentFields\Layout\Form\Fields\CountryFormField;
use Akira\AkiraFilamentFields\Layout\Form\Fields\IsActiveFormField;
use Akira\AkiraFilamentFields\Layout\Form\Fields\NameFormField;
use Akira\AkiraFilamentFields\Layout\Form\Fields\NifFormField;
use Akira\AkiraFilamentFields\Layout\Table\Columns\AddressTableColumn;
use Filament\Forms\Components\Group;

class FormHelper
{
    public static function clientForm(): Group
    {

        return Group::make([
            NameFormField::make(),
            NifFormField::make(),
            CountryFormField::make(),
            IsActiveFormField::make()
                ->label(__('akira-filament-fields::form.fields.is_active')),

            AddressTableColumn::make(),

        ])->columns();
    }
}
