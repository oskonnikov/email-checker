<?php

namespace Oskonnikov\EmailChecker\Tests;

use Oskonnikov\EmailChecker\EmailCheckerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            EmailCheckerServiceProvider::class,
        ];
    }
}
