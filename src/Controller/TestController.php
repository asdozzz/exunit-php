<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

final class TestController extends AbstractController
{
    public function __construct(private string $appTitle)
    {
    }

    #[Route('/test', name: 'index')]
    function test()
    {
        die("<pre>" . print_r('test22233999888 '.$this->appTitle, true) . "</pre>");
    }
}
