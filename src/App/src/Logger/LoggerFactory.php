<?php

namespace App\Logger;

use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class LoggerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new \App\Logger\Logger();
    }
}
