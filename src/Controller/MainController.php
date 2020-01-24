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
     * @Route("autun-menu", name="autunMenu")
     */
    public function autunMenu()
    {
        return $this->render('main/autunMenu.html.twig');
    }
    /**
     * @Route("chamonix-menu", name="chamonixMenu")
     */
    public function chamonyMenu()
    {
        return $this->render('main/chamonixMenu.html.twig');
    }
    /**
     * @Route("laser-game-autun", name="laserGameAutun")
     */
    public function laserGameAutun()
    {
        return $this->render('main/laserGameAutun.html.twig');
    }
    /**
     * @Route("laser-game-chamonix", name="laserGameChamonix")
     */
    public function laserGameChamonix()
    {
        return $this->render('main/laserGameChamonix.html.twig');
    }
    /**
     * @Route("salle-gaming", name="salleGaming")
     */
    public function salleGaming()
    {
        return $this->render('main/salleGaming.html.twig');
    }
    /**
     * @Route("lancer-de-hache-autun", name="lancerHacheAutun")
     */
    public function lancerHacheAutun()
    {
        return $this->render('main/lancerHacheAutun.html.twig');
    }
    /**
     * @Route("lancer-de-hache-chamonix", name="lancerHacheChamonix")
     */
    public function lancerHacheChamonix()
    {
        return $this->render('main/lancerHacheChamonix.html.twig');
    }
    /**
     * @Route("bubblefoot-autun", name="bubbleFootAutun")
     */
    public function bubbleFootAutun()
    {
        return $this->render('main/bubbleFootAutun.html.twig');
    }
    /**
     * @Route("bubblefoot-chamonix", name="bubbleFootChamonix")
     */
    public function bubbleFootChamonix()
    {
        return $this->render('main/bubbleFootChamonix.html.twig');
    }  
}
