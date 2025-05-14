<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class TestController extends AbstractController
{
    public function __construct(private string $appTitle)
    {
    }

    #[Route('/test', name: 'index')]
    function test()
    {
        return new JsonResponse(['as' => 'test222339998886666999 ']);
    }
}
