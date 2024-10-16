<?php

use Joomla\CMS\Extension\PluginInterface;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Event\DispatcherInterface;
use Noel\Plugin\WebServices\Aiwfc\Extension\Aiwfc;

\defined('_JEXEC') or die;

return new class() implements ServiceProviderInterface {

    public function register(Container $container): void
    {
        $container->set(
            PluginInterface::class,
            function (Container $container) {
                $plugin     = new Aiwfc(
                    $container->get(DispatcherInterface::class),
                    (array) PluginHelper::getPlugin('webservices', 'aiwfc')
                );
                $plugin->setApplication(Factory::getApplication());

                return $plugin;
            }
        );
    }
};
