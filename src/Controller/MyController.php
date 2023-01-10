<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pimcore\Model\Dataobject;
use Symfony\Component\Routing\Annotation\Route;



class MyController extends FrontendController
{   
    // Homepage
    /**
     * @param Request $request
     * @return Response
     */
    public function homePage(Request $request): Response
    {
        return $this->render('default/home.html.twig');
    }

    // header page
    /**
     * @param Request $request
     * @return Response
     */
    public function header(Request $request): Response
    {
        return $this->render('snippet/header.html.twig');
    }

    // footer page
    /**
     * @param Request $request
     * @return Response
     */
    public function footer(Request $request): Response
    {
        return $this->render('snippet/footer.html.twig');
    }

    // electronics page
    public function electronics(Request $request): Response
    {
        return $this->render('default/electronics.html.twig');
    }



    //  do listing of objects

    /**
     * @Route("/electronics", name="electronics", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function add(Request $request):Response
    {
        $items = new DataObject\Electronics\Listing();
        $items->setOrderKey("RAND()", false);
        return $this->render('default/home.html.twig',['objects'=>$items]);
    }
}

