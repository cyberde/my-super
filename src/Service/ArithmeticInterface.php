<?php

namespace cyberde\ArithmeticBundle\Service;

interface ArithmeticInterface
{
  public const TAG = 'arithmetic.service';
  public function performTask(): string;
}