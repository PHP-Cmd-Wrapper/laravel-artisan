<?php

namespace CmdWrapper\Wrapper\Php\Laravel\Artisan;

use CmdWrapper\Wrapper\Attributes\EqualsCommand;

class MigrateCommand extends Command
{
    #[EqualsCommand('./artisan migrate')]
    #[EqualsCommand('./artisan migrate --force')]
    public function run(bool $force = true): void
    {
        $this
            ->artisan
            ->runCommand('migrate' . ($force ? ' --force' : ''));
    }

    #[EqualsCommand('./artisan migrate:fresh')]
    #[EqualsCommand('./artisan migrate --force')]
    public function fresh(bool $force = true): void
    {
        $this
            ->artisan
            ->runCommand('migrate:fresh' . ($force ? ' --force' : ''));
    }
}
