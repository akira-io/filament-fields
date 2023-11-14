<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\Select;

class ExpenseTypeFormField
{
    public static function make(): Select
    {

        return RelationFormField::make('expense_type_id')
            ->label(__('akira-filament-fields::form.fields.expense_type'))
            ->relationship('expenseType', 'name')
            ->createOptionForm([
                NameFormField::make()->unique(ignoreRecord: true),
            ])
            ->required();
    }
}
