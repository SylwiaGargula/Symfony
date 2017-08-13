<?php

namespace KwejkBundle\Controller;

use KwejkBundle\Entity\Uzytkownik;
use KwejkBundle\KwejkBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class RejestracjaController extends Controller
{
    /**
     * @Route("/Rejestracja",name="rejestracja")
     */
    public function RejestracjaAction(Request $request)
    {
        if($request->getMethod()=="POST")
        {
            $em=$this->getDoctrine()->getEntityManager();
            $repozytorium=$em->getRepository('KwejkBundle:Uzytkownik');

            $uzytkownik=new Uzytkownik();
            $login=$request->get('login');
           $haslo=$request->get('haslo');
            $mail=$request->get('mail');

            $user=$repozytorium->findOneBy(array('login'=>$login));
            $user1=$repozytorium->findOneBy(array('email'=>$mail));

            if($user || $user1)
            {
                return $this->render('KwejkBundle:Rejestracja:rejestracja.html.twig', array('Blad'=>"Bledny login lub email"
                ));
            }
else {
    $uzytkownik->setEmail($mail);
    $uzytkownik->setHaslo($haslo);
    $uzytkownik->setLogin($login);
    $em->persist($uzytkownik);
    $em->flush();

    return $this->render('KwejkBundle:StartowaController:startowa.html.twig', array(
    ));
}   }
        else{

            return $this->render('KwejkBundle:Rejestracja:rejestracja.html.twig', array(
                // ...
            ));
        }

    }

}
