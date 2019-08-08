<?php

namespace cyberde\Service;

use cyberde\MySuperBundle\Service\MathInterface;

class SimpleMath implements MathInterface
{
  public function performTask(): string
  {
    // TODO: Implement performTask() method.
    return eval("2 * 2 + 2");
  }
}