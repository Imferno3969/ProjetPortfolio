<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController2Controller extends AbstractController
{
    #[Route('/test/controller2', name: 'app_test_controller2')]
    public function index(): Response
    {
        return $this->render('test_controller2/index.html.twig', [
            'controller_name' => 'TestController2Controller',
        ]);
    }

    #[Route('/page1', name: 'page1')]
    public function index2(): Response
    {
        return $this->render('test_controller2/page1.html.twig', [
            'controller_name' => 'TestController2Controller',
        ]);
    }

    #[Route('/page2', name: 'page2')]
    public function index3(): Response
    {
        return $this->render('test_controller2/page2.html.twig', [
            'controller_name' => 'TestController2Controller',
        ]);
    }
}
