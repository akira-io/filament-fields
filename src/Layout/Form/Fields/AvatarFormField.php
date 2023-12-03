<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Filament\Forms\Components\FileUpload;

class AvatarFormField
{
    public static function make(): FileUpload
    {

        return FileUpload::make('avatar');

    }
}
