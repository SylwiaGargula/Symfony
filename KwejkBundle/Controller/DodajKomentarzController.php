<?php

namespace KwejkBundle\Controller;

use KwejkBundle\Entity\Komentarz;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class DodajKomentarzController extends Controller
{
    /**
     * @Route("/DodajKomentarz/{slug}",name="dodajkomentarz")
     */
    public function DodajKomentarzAction($slug,Request $request)
    {
        $session=$request->getSession();
            $imieuzytkownika=$session->get('name');
            $id = $slug;
            if($request->getMethod()=="POST") {
            $em = $this->getDoctrine()->getEntityManager();
            $repozytorium = $em->getRepository("KwejkBundle:Obrazek");
            $obrazek=$repozytorium->findOneBy(array('id' => $id));
            $obrazek->setLicznikkomentarzy($obrazek->getLicznikkomentarzy()+1);
            $komentarz=$request->get('senderText');
            $ocena=$request->get('optradio');
            $Kom=new Komentarz();
            $repozytoriumUser=$em->getRepository("KwejkBundle:Uzytkownik");
            $user=$repozytoriumUser->findOneBy(array('login'=>$imieuzytkownika));
            $Kom->setTresc($komentarz);
            $Kom->setOcena($ocena);
            $Kom->setUzytkownik($user);
            $Kom->setObrazek($obrazek);
            $em->persist($Kom);
            $em->flush();

            return $this->render('KwejkBundle:Obrazek:obrazek.html.twig', array("obrazek"=>$obrazek,'imieuzytkownika'=>$imieuzytkownika
            ));

            }
        return $this->render('KwejkBundle:Logowanie:login.html.twig', array(
        ));

                // ...
            }


}
