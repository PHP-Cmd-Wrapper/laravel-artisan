<?php

namespace CmdWrapper\Wrapper\Php\Laravel;

use ArtARTs36\ShellCommand\Interfaces\ShellCommandInterface;
use ArtARTs36\ShellCommand\Result\CommandResult;
use CmdWrapper\Wrapper\Attributes\CommandNamespace;
use CmdWrapper\Wrapper\Attributes\EqualsCommand;
use CmdWrapper\Wrapper\Core\BinWrapper;
use CmdWrapper\Wrapper\Php\Laravel\Artisan\ConfigCommand;
use CmdWrapper\Wrapper\Php\Laravel\Artisan\KeyCommand;
use CmdWrapper\Wrapper\Php\Laravel\Artisan\MigrateCommand;
use CmdWrapper\Wrapper\Php\Laravel\Artisan\PassportCommand;
use CmdWrapper\Wrapper\Php\Laravel\Artisan\QueueCommand;
use CmdWrapper\Wrapper\Php\Laravel\Artisan\RouteCommand;
use CmdWrapper\Wrapper\Php\Laravel\Artisan\StorageCommand;
use CmdWrapper\Wrapper\Php\Laravel\Artisan\ViewCommand;

class Artisan extends BinWrapper
{
    protected static string $defaultBinary = './artisan';

    #[CommandNamespace('migrate')]
    public function migrate(): MigrateCommand
    {
        return new MigrateCommand($this);
    }

    #[CommandNamespace('key')]
    public function key(): KeyCommand
    {
        return new KeyCommand($this);
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

    #[CommandNamespace('queue')]
    public function queue(): QueueCommand
    {
        return new QueueCommand($this);
    }

    #[CommandNamespace('view')]
    public function view(): ViewCommand
    {
        return new ViewCommand($this);
    }
}
