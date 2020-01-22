<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("", name="accueil")
     */
    public function accueil()
    {
        return $this->render('main/accueil.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("autunMenu", name="autunMenu")
     */
    public function autunMenu()
    {
        return $this->render('main/autunMenu.html.twig');
    }
    /**
     * @Route("chamonixMenu", name="chamonixMenu")
     */
    public function chamonyMenu()
    {
        return $this->render('main/chamonixMenu.html.twig');
    }
    /**
     * @Route("laserGameAutun", name="laserGameAutun")
     */
    public function laserGameAutun()
    {
        return $this->render('main/laserGameAutun.html.twig');
    }
    /**
     * @Route("laserGameChamonix", name="laserGameChamonix")
     */
    public function laserGameChamonix()
    {
        return $this->render('main/laserGameChamonix.html.twig');
    }
    /**
     * @Route("salleGaming", name="salleGaming")
     */
    public function salleGaming()
    {
        return $this->render('main/salleGaming.html.twig');
    }
    /**
     * @Route("lancerHacheAutun", name="lancerHacheAutun")
     */
    public function lancerHacheAutun()
    {
        return $this->render('main/lancerHacheAutun.html.twig');
    }
    /**
     * @Route("lancerHacheChamonix", name="lancerHacheChamonix")
     */
    public function lancerHacheChamonix()
    {
        return $this->render('main/lancerHacheChamonix.html.twig');
    }
    /**
     * @Route("bubbleFootAutun", name="bubbleFootAutun")
     */
    public function bubbleFootAutun()
    {
        return $this->render('main/bubbleFootAutun.html.twig');
    }
    /**
     * @Route("bubbleFootChamonix", name="bubbleFootChamonix")
     */
    public function bubbleFootChamonix()
    {
        return $this->render('main/bubbleFootChamonix.html.twig');
    }  
}
