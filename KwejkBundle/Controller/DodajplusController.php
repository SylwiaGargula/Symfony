<?php

namespace KwejkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DodajplusController extends Controller
{
    /**
     * @Route("/Dodajplus/{slug}", name='dodajplus')
     */
 /*   public function DodajplusAction($slug,Request $request)
    {
        $session = $request->getSession();
        $imieuzytkownika = $session->get('name');

        $id_page = $slug;
        $em = $this->getDoctrine()->getEntityManager();
        $repozytorium = $em->getRepository("KwejkBundle:Obrazek");
        $obrazki = $repozytorium->findAll();


        return $this->render('KwejkBundle:Index:index.html.twig', array('obrazki' => $obrazki, 'id' => $id_page, 'imieuzytkownika' => $imieuzytkownika
            // ...
        ));
    }
 */
}
