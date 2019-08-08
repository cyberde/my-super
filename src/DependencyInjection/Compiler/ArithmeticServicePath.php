<?php

namespace cyberde\ArithmeticBundle\DependencyInjection\Compiler;

use cyberde\ArithmeticBundle\Controller\ArithmeticController;
use cyberde\ArithmeticBundle\Service\ArithmeticInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ArithmeticServicePath implements CompilerPassInterface
{
  public function process(ContainerBuilder $container)
  {
    if (!$container->has(ArithmeticController::class)) {
      return;
    }

    $controller = $container->findDefinition(ArithmeticController::class);
    foreach (array_keys($container->findTaggedServiceIds(ArithmeticInterface::TAG)) as $serviceId) {
      $controller->addMethodCall('addMathService', [new Reference($serviceId)]);
    }
  }
}