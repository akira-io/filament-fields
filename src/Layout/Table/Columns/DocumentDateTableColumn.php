<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class DocumentDateTableColumn
{
    public static function make(): TextColumn
    {

        return TextColumn::make('document_date')
            ->label(__('akira-filament-fields::table.columns.document_date'))
            ->date('d-m-Y')
            ->sortable()
            ->searchable();
    }
}
