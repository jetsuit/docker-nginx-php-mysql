<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractFOSRestController
{
    /**
     * @Route("/api/list", name="list")
     */
    public function index()
    {
        return $this->json([
            'message' => 'test',
            'path' => 'src/Controller/ListController.php'
        ]);
    }

    /**
     * @Rest\Get("/api/update")
     */
    public function update()
    {
        return $this->json([
            'message' => 'test',
            'path' => 'src/Controller/ListController.php'
        ]);
    }
}
