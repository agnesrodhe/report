<?php

namespace ContainerUaYt0fD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDiceControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DiceController' shared autowired service.
     *
     * @return \App\Controller\DiceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DiceController.php';

        $container->services['App\\Controller\\DiceController'] = $instance = new \App\Controller\DiceController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\DiceController', $container));

        return $instance;
    }
}
