<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Layout\Form\Fields;

use Akira\AkiraFilamentFields\Enums\RegexEnum;
use Filament\Forms\Components\TextInput;

class TimeFormField
{
    public static function make(string $name): TextInput
    {

        return TextInput::make($name)
            ->helperText(__('akira-filament-fields::form.time.helper_text'))
            ->regex(RegexEnum::TIME->value);
    }
}
