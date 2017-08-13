<?php

namespace KwejkBundle\Controller;

use KwejkBundle\Entity\Obrazek;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DodajController extends Controller
{
    /**
     * @Route("/Dodaj",name="dodaj")
     */

    public function DodajAction(Request $request)
    {
        $session=$request->getSession();
        $imieuzytkownika=$session->get('name');

        if($request->getMethod()=="POST")
        {

            $em=$this->getDoctrine()->getEntityManager();

            $Obrazek=new Obrazek();
            $Obrazek->setTytul($request->get("tytul"));
            $Obrazek->setSciezka($request->get("sciezka"));
            $Obrazek->setData(new \DateTime());
            $Obrazek->setLicznikkomentarzy(0);
            $Obrazek->setLicznikplusow(0);
            $em->persist($Obrazek);
            $em->flush();

            return $this->render('KwejkBundle:Dodaj:dodaj.html.twig', array('imieuzytkownika'=>$imieuzytkownika
                // ...
            ));
        }
        else
        return $this->render('KwejkBundle:Dodaj:dodaj.html.twig', array('imieuzytkownika'=>$imieuzytkownika
            // ...
        ));
    }

}
