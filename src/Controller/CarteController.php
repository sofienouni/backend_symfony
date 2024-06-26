<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CarteService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

class CarteController extends AbstractController
{
    private $carteService;
    private $serializer;

    public function __construct(CarteService $carteService)
    {
        $this->carteService = $carteService;
    }

    #[Route('/main', name: 'main')]
    public function main(): JsonResponse
    {
        $main = $this->carteService->generateRandomHand();
        // $main = $this->serializer->serialize($main, 'json');

        return new JsonResponse($main);
    }

    #[Route('/sorted-hand', name: 'sorted_hand')]
    public function sortedHand(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $sortedHand = $this->carteService->sortHand($data);
        // $sortedHand = $this->serializer->serialize($sortedHand, 'json');
        return new JsonResponse($sortedHand);
    }
}
