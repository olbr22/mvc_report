<?php

namespace ContainerRk7Dnjo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCodeQualityControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CodeQualityController' shared autowired service.
     *
     * @return \App\Controller\CodeQualityController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CodeQualityController.php';

        $container->services['App\\Controller\\CodeQualityController'] = $instance = new \App\Controller\CodeQualityController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\CodeQualityController', $container));

        return $instance;
    }
}
