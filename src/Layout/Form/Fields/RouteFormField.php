<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\Select;

class RouteFormField
{
    public static function make(): Select
    {

        return Select::make('route_id')
            ->label(__('akira-filament-fields::form.fields.route'))
            ->relationship('route', 'name')
            ->required();

    }
}
