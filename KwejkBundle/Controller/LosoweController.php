<?php

namespace KwejkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class LosoweController extends Controller
{
    /**
     * @Route("/Losowanie", name="losowe")
     */
    public function LosowanieAction(Request $request)
    {
        $session=$request->getSession();
        $imieuzytkownika=$session->get('name');

        $em=$this->getDoctrine()->getEntityManager();
        $repozytorium=$em->getRepository("KwejkBundle:Obrazek");
        $obrazki=$repozytorium->findAll();
$liczba=count($obrazki);
       $numer= rand(1,$liczba);

        return $this->render('KwejkBundle:Obrazek:obrazek.html.twig', array('obrazek'=>$obrazki[$numer-1],'imieuzytkownika'=>$imieuzytkownika
            // ...
        ));





        return $this->render('KwejkBundle:Losowe:losowanie.html.twig', array(
            // ...
        ));
    }

}
