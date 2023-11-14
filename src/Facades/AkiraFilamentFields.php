<?php

namespace Akira\AkiraFilamentFields\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Akira\AkiraFilamentFields\AkiraFilamentFields
 */
class AkiraFilamentFields extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Akira\AkiraFilamentFields\AkiraFilamentFields::class;
    }
}
