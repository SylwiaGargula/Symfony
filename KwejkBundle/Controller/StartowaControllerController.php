<?php

namespace KwejkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class StartowaControllerController extends Controller
{
    /**
     * @Route("/Startowa", name="startowa")
     */
    public function StartowaAction(Request $request)
    {
        $session=$request->getSession();
        $imieuzytkownika=$session->get('name');

        return $this->render('KwejkBundle:StartowaController:startowa.html.twig', array('imieuzytkownika'=>$imieuzytkownika
            // ...
        ));
    }

}
