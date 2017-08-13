<?php

namespace KwejkBundle\Controller;

use KwejkBundle\KwejkBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class LogowanieController extends Controller
{
    /**
     * @Route("/login",name="login")
     */
    public function loginAction(Request $request)
    {
        if($request->getMethod()=="POST")
        {
        $em=$this->getDoctrine()->getEntityManager();
            $repozytorium=$em->getRepository('KwejkBundle:Uzytkownik');

            $login=$request->get('login');
            $haslo=$request->get('haslo');

            $user=$repozytorium->findOneBy(array('login'=>$login,'haslo'=>$haslo));

            if($user)
            {
    $session=$request->getSession();
                $session->set('name',$user->getLogin());

                return $this->render('KwejkBundle:StartowaController:startowa.html.twig', array('komunikat' =>"udalo ci sie zalogowac"
                    // ...
                ));
            }
            else
            {
                return $this->render('KwejkBundle:Logowanie:login.html.twig', array('komunikat'=>"niepoprawne logowanie"
                    // ...
                ));
            }

        }

        else
                return $this->render('KwejkBundle:Logowanie:login.html.twig', array(
            // ...
        ));
    }

}
