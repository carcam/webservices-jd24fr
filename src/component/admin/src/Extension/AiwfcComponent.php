<?php

namespace Noel\Component\Aiwfc\Administrator\Extension;

use Joomla\CMS\Extension\BootableExtensionInterface;
use Joomla\CMS\Extension\MVCComponent;
use Psr\Container\ContainerInterface;

\defined('_JEXEC') or die;

class AiwfcComponent extends MVCComponent implements BootableExtensionInterface
{
    public function boot(ContainerInterface $container) {}
}
