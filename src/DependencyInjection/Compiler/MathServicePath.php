<?php

namespace cyberde\MySuperBundle\DependencyInjection\Compiler;

use cyberde\MySuperBundle\Controller\MySuperController;
use cyberde\MySuperBundle\Service\MathInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class MathServicePath implements CompilerPassInterface
{
  public function process(ContainerBuilder $container)
  {
    if (!$container->has(MySuperController::class)) {
      return;
    }

    $controller = $container->findDefinition(MySuperController::class);
    foreach (array_keys($container->findTaggedServiceIds(MathInterface::TAG)) as $serviceId) {
      $controller->addMethodCall('addMathService', [new Reference($serviceId)]);
    }
  }
}