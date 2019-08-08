<?php

namespace cyberde\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArithmeticController
{
  /**
   * @Route("/arithmetic/math/{method}/{expression}", name="cyberde_arithmetic")
   */

  public function math($method, $expression)
  {
    return new Response(
      '<html><body>method: '.$method.' expression: '.$expression.'</body></html>'
    );
  }
}