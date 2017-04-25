<?php
namespace App\Middleware;

use Interop\Container\ContainerInterface;
use Fabfuel\Prophiler\Profiler;
use Fabfuel\Prophiler\Toolbar;
use bitExpert\Http\Middleware\Psr7\Prophiler\ProphilerMiddleware;

class ProphilerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $prophiler = new Profiler();
        $toolbar = new Toolbar($prophiler);
        return new ProphilerMiddleware($toolbar);
    }
}
