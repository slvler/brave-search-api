<?php

namespace Slvler\Brave\Tests\Unit;

use Slvler\Brave\BraveServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            BraveServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}