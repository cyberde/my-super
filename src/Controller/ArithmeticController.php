<?php

namespace cyberde\ArithmeticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ArithmeticController extends AbstractController
{
  /**
   * @Route("/arithmetic/perform/{expression}", methods={"GET"}, name="cyberde_arithmetic")
   */

  public function perform($expression): JsonResponse
  {
    return $this->json(["result" => eval($expression)]);
  }
}