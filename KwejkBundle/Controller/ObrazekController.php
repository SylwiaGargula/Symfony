<?php

namespace KwejkBundle\Controller;

use KwejkBundle\Entity\Obrazek;
use KwejkBundle\KwejkBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ObrazekController extends Controller
{
    /**
     * @Route("/Obrazek/{slug}",name="podstrona")
     */
    public function ObrazekAction($slug,Request $request)
    {
        $session=$request->getSession();
        $imieuzytkownika=$session->get('name');

        $id=$slug;
        $em=$this->getDoctrine()->getEntityManager();
        $repozytorium=$em->getRepository("KwejkBundle:Obrazek");

        $obrazek=$repozytorium->findOneBy(array("id"=>$id));

        return $this->render('KwejkBundle:Obrazek:obrazek.html.twig', array("obrazek"=>$obrazek,'imieuzytkownika'=>$imieuzytkownika
            // ...
        ));
    }

}
