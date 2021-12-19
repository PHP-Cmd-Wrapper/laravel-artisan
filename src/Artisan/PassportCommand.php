<?php

namespace CmdWrapper\Wrapper\Php\Laravel\Artisan;

use CmdWrapper\Wrapper\Attributes\EqualsCommand;

class PassportCommand extends Command
{
    #[EqualsCommand('./artisan passport:install')]
    public function install(): void
    {
        $this->artisan->runCommand('passport:install');
    }

    #[EqualsCommand('./artisan passport:client')]
    public function client(): void
    {
        $this->artisan->runCommand('passport:client');
    }

    #[EqualsCommand('./artisan passport:keys')]
    #[EqualsCommand('./artisan passport:keys --force')]
    public function keys(bool $force = false): void
    {
        $this
            ->artisan
            ->runCommand('passport:keys' . ($force ? ' --force' : ''));
    }

    #[EqualsCommand('./artisan passport:hash --force')]
    public function hash(): void
    {
        $this->artisan->runCommand('passport:hash --force');
    }

    #[EqualsCommand('./artisan passport:purge')]
    public function purge(): void
    {
        $this->artisan->runCommand('passport:purge');
    }
}
