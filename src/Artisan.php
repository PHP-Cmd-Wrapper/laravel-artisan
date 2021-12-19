<?php

namespace CmdWrapper\Wrapper\Php\Laravel;

use ArtARTs36\ShellCommand\Interfaces\ShellCommandInterface;
use ArtARTs36\ShellCommand\Result\CommandResult;
use CmdWrapper\Wrapper\Attributes\CommandNamespace;
use CmdWrapper\Wrapper\Attributes\EqualsCommand;
use CmdWrapper\Wrapper\Core\BinWrapper;
use CmdWrapper\Wrapper\Php\Laravel\Artisan\ConfigCommand;
use CmdWrapper\Wrapper\Php\Laravel\Artisan\PassportCommand;
use CmdWrapper\Wrapper\Php\Laravel\Artisan\RouteCommand;
use CmdWrapper\Wrapper\Php\Laravel\Artisan\StorageCommand;

class Artisan extends BinWrapper
{
    protected static string $defaultBinary = './artisan';

    #[EqualsCommand('./artisan migrate')]
    #[EqualsCommand('./artisan migrate --force')]
    public function migrate(bool $force = true): void
    {
        $this
            ->newCommand()
            ->addArgument('migrate')
            ->when($force, function (ShellCommandInterface $command) {
                $command->addOption('force');
            })
            ->executeOrFail($this->commandExecutor);
    }

    #[EqualsCommand('./artisan key:generate')]
    public function generateKey(): void
    {
        $this->newCommand()->addArgument('key:generate', false)->executeOrFail($this->commandExecutor);
    }

    #[EqualsCommand('./artisan $command')]
    public function runCommand(string $command): CommandResult
    {
        return $this->newCommand()->addArgument($command, false)->executeOrFail($this->commandExecutor);
    }

    #[CommandNamespace('storage')]
    public function storage(): StorageCommand
    {
        return new StorageCommand($this);
    }

    #[CommandNamespace('config')]
    public function config(): ConfigCommand
    {
        return new ConfigCommand($this);
    }

    #[CommandNamespace('route')]
    public function route(): RouteCommand
    {
        return new RouteCommand($this);
    }

    #[CommandNamespace('passport')]
    public function passport(): PassportCommand
    {
        return new PassportCommand($this);
    }
}
