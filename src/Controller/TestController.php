<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/test", name: "test")]
final class TestController extends AbstractController
{
    public function __construct(private string $appTitle)
    {
    }

    #[Route('/', name: 'index')]
    function test()
    {
        die("<pre>" . print_r('test222 '.$this->appTitle, true) . "</pre>");
    }
}
