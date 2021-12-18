<?php

namespace CmdWrapper\Wrapper\Php\Laravel\Artisan;

use CmdWrapper\Wrapper\Attributes\EqualsCommand;

class ConfigCommand extends Command
{
    #[EqualsCommand('./artisan config:clear')]
    public function clear(): void
    {
        $this->artisan->runCommand('config:clear');
    }

    #[EqualsCommand('./artisan config:cache')]
    public function cache(): void
    {
        $this->artisan->runCommand('config:cache');
    }
}
