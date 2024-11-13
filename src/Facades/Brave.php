<?php

declare(strict_types=1);

namespace Slvler\Brave\Facades;

use Illuminate\Support\Facades\Facade;

class Brave extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'brave';
    }
}
