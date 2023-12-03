<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Helpers;

use Akira\AkiraFilamentFields\Layout\Form\Fields\AddressFormField;
use Akira\AkiraFilamentFields\Layout\Form\Fields\CountryFormField;
use Akira\AkiraFilamentFields\Layout\Form\Fields\IsActiveFormField;
use Akira\AkiraFilamentFields\Layout\Form\Fields\NameFormField;
use Akira\AkiraFilamentFields\Layout\Form\Fields\NifFormField;
use Filament\Forms\Components\Group;

class FormHelper
{
    public static function clientForm(): Group
    {
        return Group::make([
            NameFormField::make(),
            NifFormField::make(),
            CountryFormField::make(),
            IsActiveFormField::make(),
            AddressFormField::make(),
        ])->columns();
    }
}
