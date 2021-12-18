<?php

namespace CmdWrapper\Wrapper\Php\Laravel\Tests;

use ArtARTs36\ShellCommand\Executors\TestExecutor;
use ArtARTs36\ShellCommand\ShellCommander;
use CmdWrapper\Wrapper\Core\RunContext;
use CmdWrapper\Wrapper\Php\Laravel\Artisan;
use PHPUnit\Framework\TestCase;

final class ArtisanTest extends TestCase
{
    /**
     * @covers \CmdWrapper\Wrapper\Php\Laravel\Example::version
     */
    public function testVersion(): void
    {
        $wrapper = new Artisan(
            new ShellCommander(),
            TestExecutor::fromSuccess('Laravel Framework 8.73.2
'),
            new RunContext('', '',)
        );

        $resultVersion = $wrapper->version();

        self::assertEquals([8, 73, 2], [$resultVersion->major(), $resultVersion->minor(), $resultVersion->patch()]);
    }
}
