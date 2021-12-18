<?php

namespace CmdWrapper\Wrapper\Php\Laravel\Artisan;

use CmdWrapper\Wrapper\Attributes\EqualsCommand;

class RouteCommand extends Command
{
    #[EqualsCommand('./artisan route:list --json')]
    public function list(): array
    {
        return json_decode($this->artisan->runCommand('route:list --json'), true);
    }

    #[EqualsCommand('./artisan route:clear')]
    public function clear(): void
    {
        $this->artisan->runCommand('route:clear');
    }

    #[EqualsCommand('./artisan route:cache')]
    public function cache(): void
    {
        $this->artisan->runCommand('route:cache');
    }
}
