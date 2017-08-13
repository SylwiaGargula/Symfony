<?php

namespace KwejkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class NajlepszeController extends Controller
{
    /**
     * @Route("/Najwiecejkomentarzy", name="najwiecejkomentarzy")
     */
    public function NajlepszeAction(Request $request)
    {
        $session=$request->getSession();
        $imieuzytkownika=$session->get('name');
        $em=$this->getDoctrine()->getEntityManager();
        $repozytorium=$em->getRepository("KwejkBundle:Obrazek");
        $obrazki=$repozytorium->findBy(array(),array('licznikkomentarzy'=>'desc'));

if($request->getMethod()=='POST')
{
    $option = $request->get('options');
    $id=$request->get('numer');
    $obrazek=$repozytorium->findOneBy(array('id'=>$id));
    if($option=="+")
    $obrazek->setLicznikplusow($obrazek->getLicznikplusow()+1);
    else
        $obrazek->setLicznikplusow($obrazek->getLicznikplusow()-1);
    $em->flush();
}

        return $this->render('KwejkBundle:Najlepsze:najlepsze.html.twig', array('imieuzytkownika'=>$imieuzytkownika,'obrazki'=>$obrazki,'opis'=>"Najczęściej komentowane",
          'x'=>'a'  // ...
        ));
    }

}
