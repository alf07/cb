<?php

namespace alf89\cb\Facades;

use Illuminate\Support\Facades\Facade;

class Cb extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Cb';
    }
}