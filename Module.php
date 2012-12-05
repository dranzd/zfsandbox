<?php

namespace ZfSandbox;

use Zend\ModuleManager\ModuleManager;

class Module
{
    protected $view;
    protected $viewListener;
    protected $serviceManager;

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                    'Catalog' => __DIR__ . '/src/Catalog',
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function onBootstrap($e)
    {
    }

    public function getViewHelperConfig()
    {
        return array(
            'invokables' => array(
            ),
            'factories' => array(
            ),
            'initializers' => array(
            ),
        );
    }

    public function getControllerConfig()
    {
        return array(
            'initializers' => array(
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'shared' => array(
            ),
            'factories' => array(
            ),
        );
    }
}
