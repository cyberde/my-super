<?php

namespace cyberde\ArithmeticBundle\Controller;

use cyberde\ArithmeticBundle\Service\ArithmeticInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ArithmeticController extends AbstractController
{
  /** @var ArithmeticInterface[] */
  private $mathServices = [];

  public function addMathService(ArithmeticInterface $mathService)
  {
    $this->mathServices[] = $mathService;
  }

  /**
   * @Route("/result")
   * @return JsonResponse
   */
  public function getResult(): JsonResponse
  {
    return $this->json(array_map(function (ArithmeticInterface $MathService) {
      return ['result' => $MathService->performTask()];
    }, $this->mathServices));
  }
}