<?php

namespace ContainerI3Z0Yrw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormSessionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FormSessionController' shared autowired service.
     *
     * @return \App\Controller\FormSessionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FormSessionController.php';

        $container->services['App\\Controller\\FormSessionController'] = $instance = new \App\Controller\FormSessionController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\FormSessionController', $container));

        return $instance;
    }
}
