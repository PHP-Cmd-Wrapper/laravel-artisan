<?php

namespace CmdWrapper\Wrapper\Php\Laravel\Artisan;

use CmdWrapper\Wrapper\Attributes\EqualsCommand;

class KeyCommand extends Command
{
    #[EqualsCommand('./artisan key:generate')]
    public function generate(): void
    {
        $this->artisan->runCommand('key:generate');
    }
}
