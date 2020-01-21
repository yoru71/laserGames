<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("", name="acceuil")
     */
    public function acceuil()
    {
        return $this->render('main/acceuil.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
