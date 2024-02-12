<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Table\Columns;

use Filament\Tables\Columns\TextColumn;

class TimeStampTableColumn
{
    public function createdAt(): TextColumn
    {

        return TextColumn::make('created_at')
            ->label('Criado em')
            ->dateTime('d-m-Y  H:i')
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true);
    }

    public static function make(): TimeStampTableColumn
    {

        return new TimeStampTableColumn();
    }

    public function updatedAt(): TextColumn
    {

        return TextColumn::make('updated_at')
            ->label('Atualizado em')
            ->dateTime('d-m-Y  H:i')
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true);

    }

    public function deletedAt(): TextColumn
    {

        return TextColumn::make('updated_at')
            ->label('Eliminado em')
            ->dateTime('d-m-Y  H:i')
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true);

    }

    public function emailVerifiedAt(): TextColumn
    {

        return TextColumn::make('email_verified_at')
            ->label('Email verificado em')
            ->dateTime('d-m-Y  H:i')
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true);

    }
}
