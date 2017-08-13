<?php

namespace KwejkBundle\Controller;

use KwejkBundle\KwejkBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Route("/Index/{slug}",name="index")
     */
    public function IndexAction($slug,Request $request)
    {
        $session=$request->getSession();
        $imieuzytkownika=$session->get('name');

        $id_page=$slug;
        $em=$this->getDoctrine()->getEntityManager();
        $repozytorium=$em->getRepository("KwejkBundle:Obrazek");
        $obrazki=$repozytorium->findAll();
        $pomoc=count($obrazki)/10+1;

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

        return $this->render('KwejkBundle:Index:index.html.twig', array("obrazki"=>$obrazki,'id'=>$id_page,'imieuzytkownika'=>$imieuzytkownika,'pomoc'=>$pomoc
        ));
    }

}
