<?php
namespace Hubmein;

use ZF\Apigility\Provider\ApigilityProviderInterface;

class Module implements ApigilityProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Hubmein\V1\Rest\Event\EventResource' => function ($sm) {
                    $event = $sm->get('Events\Service\EventService');
                    return new V1\Rest\Event\EventResource($event);
                }
            )
        );
    }
}
