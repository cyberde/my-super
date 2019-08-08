<?php

namespace cyberde\MySuperBundle\Service;

interface MathInterface
{
  public const TAG = 'math.service';
  public function performTask(): string;
}