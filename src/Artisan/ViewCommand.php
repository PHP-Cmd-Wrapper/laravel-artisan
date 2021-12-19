<?php

namespace CmdWrapper\Wrapper\Php\Laravel\Artisan;

use CmdWrapper\Wrapper\Attributes\EqualsCommand;

class ViewCommand extends Command
{
    #[EqualsCommand('./artisan view:clear')]
    public function clear(): void
    {
        $this->artisan->runCommand('view:clear');
    }

    #[EqualsCommand('./artisan view:cache')]
    public function cache(): void
    {
        $this->artisan->runCommand('view:cache');
    }
}
