<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\Select;

class RelationFormField
{
    public static function make(string $name): Select
    {

        return Select::make($name)
            ->searchable()
            ->preload();
    }
}
