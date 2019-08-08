<?php

namespace cyberde\ArithmeticBundle;

use cyberde\ArithmeticBundle\DependencyInjection\Compiler\ArithmeticServicePath;
use cyberde\ArithmeticBundle\Service\ArithmeticInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ArithmeticBundle extends Bundle
{
  public function build(ContainerBuilder $container)
  {
    parent::build($container);
    $container->addCompilerPass(new ArithmeticServicePath());
    $container->registerForAutoconfiguration(ArithmeticInterface::class)->addTag(ArithmeticInterface::TAG);
  }
}