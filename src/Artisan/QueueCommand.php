<?php

namespace CmdWrapper\Wrapper\Php\Laravel\Artisan;

use CmdWrapper\Wrapper\Attributes\EqualsCommand;

class QueueCommand extends Command
{
    #[EqualsCommand('./artisan queue:restart')]
    public function restart(): void
    {
        $this->artisan->runCommand('queue:restart');
    }

    #[EqualsCommand('./artisan queue:clear')]
    public function clear(): void
    {
        $this->artisan->runCommand('queue:clear');
    }
}
