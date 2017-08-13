<?php

namespace KwejkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class WylogujSieController extends Controller
{
    /**
     * @Route("/WylogujSie",name="wyloguj")
     */

    public function WylogujSieAction(Request $request)
    {
        $session=$request->getSession();
        $session->set('name',NULL);

        return $this->render('KwejkBundle:StartowaController:startowa.html.twig', array(
                // ...
        ));
    }
}
