<?php

namespace cyberde\MySuperBundle;

use cyberde\MySuperBundle\DependencyInjection\Compiler\MathServicePath;
use cyberde\MySuperBundle\Service\MathInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MySuperBundle extends Bundle
{
  public function build(ContainerBuilder $container)
  {
    parent::build($container);
    $container->addCompilerPass(new MathServicePath());
    $container->registerForAutoconfiguration(MathInterface::class)->addTag(MathInterface::TAG);
  }
}