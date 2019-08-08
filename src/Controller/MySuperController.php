<?php

namespace cyberde\MySuperBundle\Controller;

use cyberde\MySuperBundle\Service\MathInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MySuperController extends AbstractController
{
  /** @var MathInterface[] */
  private $mathServices = [];

  public function addMathService(MathInterface $mathService)
  {
    $this->mathServices[] = $mathService;
  }

  /**
   * @Route("/result")
   * @return JsonResponse
   */
  public function getResult(): JsonResponse
  {
    return $this->json(array_map(function (MathInterface $MathService) {
      return ['result' => $MathService->performTask()];
    }, $this->mathServices));
  }
}