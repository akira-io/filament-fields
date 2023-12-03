<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\DatePicker;

class DocumentDateFormField
{
    public static function make(): DatePicker
    {

        return DatePicker::make('document_date')
            ->label(__('akira-filament-fields::form.fields.document_date'));

    }
}
