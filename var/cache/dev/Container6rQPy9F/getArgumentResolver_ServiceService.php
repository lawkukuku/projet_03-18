<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\PrimaireController:modifierMotDePasse' => function () {
    return ($this->privates['service_locator.WLOd8ro'] ?? $this->load(__DIR__.'/getServiceLocator_WLOd8roService.php'));
}, 'App\\Controller\\PrimaireController:parametre' => function () {
    return ($this->privates['service_locator.j1DFWNS'] ?? $this->load(__DIR__.'/getServiceLocator_J1DFWNSService.php'));
}, 'App\\Controller\\RegistrationController:registerAction' => function () {
    return ($this->privates['service_locator.6N9cGl.'] ?? $this->load(__DIR__.'/getServiceLocator_6N9cGl_Service.php'));
}, 'App\\Controller\\SecurityController:login' => function () {
    return ($this->privates['service_locator.KELS8pk'] ?? $this->load(__DIR__.'/getServiceLocator_KELS8pkService.php'));
}, 'App\\Controller\\PrimaireController::modifierMotDePasse' => function () {
    return ($this->privates['service_locator.WLOd8ro'] ?? $this->load(__DIR__.'/getServiceLocator_WLOd8roService.php'));
}, 'App\\Controller\\PrimaireController::parametre' => function () {
    return ($this->privates['service_locator.j1DFWNS'] ?? $this->load(__DIR__.'/getServiceLocator_J1DFWNSService.php'));
}, 'App\\Controller\\RegistrationController::registerAction' => function () {
    return ($this->privates['service_locator.6N9cGl.'] ?? $this->load(__DIR__.'/getServiceLocator_6N9cGl_Service.php'));
}, 'App\\Controller\\SecurityController::login' => function () {
    return ($this->privates['service_locator.KELS8pk'] ?? $this->load(__DIR__.'/getServiceLocator_KELS8pkService.php'));
})));
