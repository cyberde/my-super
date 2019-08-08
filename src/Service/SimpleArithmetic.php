<?php

namespace cyberde\Service;

use cyberde\ArithmeticBundle\Service\ArithmeticInterface;

class SimpleArithmetic implements ArithmeticInterface
{
  public function performTask(): string
  {
    // TODO: Implement performTask() method.
    return eval("2 * 2 + 2");
  }
}