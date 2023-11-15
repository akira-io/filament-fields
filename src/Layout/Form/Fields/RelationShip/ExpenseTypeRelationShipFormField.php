<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields\RelationShip;

use Akira\AkiraFilamentFields\Layout\Form\Fields\NameFormField;
use Filament\Forms\Components\Select;

class ExpenseTypeRelationShipFormField
{
    public static function make(): Select
    {

        return RelationShipFormField::make('expense_type_id')
            ->label(__('akira-filament-fields::form.fields.expense_type'))
            ->relationship('expenseType', 'name')
            ->createOptionForm([
                NameFormField::make()->unique(ignoreRecord: true),
            ])
            ->required();
    }
}
