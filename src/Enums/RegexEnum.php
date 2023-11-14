<?php

declare(strict_types=1);

namespace Akira\AkiraFilamentFields\Enums;

enum RegexEnum: string
{
    case TIME = '/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/';
}
