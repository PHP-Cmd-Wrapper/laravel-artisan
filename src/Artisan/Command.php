<?php

namespace CmdWrapper\Wrapper\Php\Laravel\Artisan;

use CmdWrapper\Wrapper\Php\Laravel\Artisan;

abstract class Command
{
    public function __construct(protected Artisan $artisan)
    {
        //
    }
}
