<?php

namespace KwejkBundle\Controller;

use KwejkBundle\Entity\Komentarz;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class EdycjaController extends Controller
{
    /**
     * @Route("/Edycja/{slug}", name="edycja")
     */
    public function EdycjaAction($slug,Request $request)
    {

        $session=$request->getSession();
        $imieuzytkownika=$session->get('name');
        $id = $slug;
        $em = $this->getDoctrine()->getEntityManager();
        $repozytorium = $em->getRepository("KwejkBundle:Komentarz");
        $repozytorium1 = $em->getRepository("KwejkBundle:Obrazek");
        $obrazek=$repozytorium1->findOneBy(array('id'=>$id));
        if($request->getMethod()=="POST") {
            $tekst=NULL;
            $option = $request->get('options');
            $numer=$request->get('numer');
            $komentarz=$repozytorium->findOneBy(array('id'=>$numer));
            if($option=="edycja")
            {
                $tekst=$komentarz->getTresc();
            }
           $em->remove($komentarz);
            $em->flush();
        }
        return $this->render('KwejkBundle:Obrazek:obrazek.html.twig', array("obrazek"=>$obrazek,'imieuzytkownika'=>$imieuzytkownika,'tekst'=>$tekst
        ));
    }

}
