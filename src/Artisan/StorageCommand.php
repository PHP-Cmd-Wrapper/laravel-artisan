<?php

namespace CmdWrapper\Wrapper\Php\Laravel\Artisan;

use CmdWrapper\Wrapper\Attributes\EqualsCommand;

class StorageCommand extends Command
{
    #[EqualsCommand('./artisan storage:link')]
    public function link(): void
    {
        $this->artisan->runCommand('storage:link');
    }
}
