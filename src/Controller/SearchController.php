<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pimcore\Model\Dataobject;
use Pimcore\Model\DataObject\Electronics;
use Pimcore\Model\DataObject\Clothing;
use Pimcore\Model\DataObject\Footwear;
use Pimcore\Model\DataObject\Beauty;
use Pimcore\Model\DataObject\Feedback;
use Symfony\Component\Routing\Annotation\Route;



class SearchController extends FrontendController
{   
    // Searching on Clothing
    /**
    * @Route("/csearch", name="csearch", methods={"POST"})
    */
    public function searchClothing(Request $request): Response{
        $str=ucwords($_POST["search"]);
        $items = new Clothing\Listing();
        $items->setOrderKey("RAND()", false);
        $search=[];
        foreach ($items as $item) {
            if(str_starts_with($item->getBrandName(),$str))
            {
                array_push($search,$item);

            }
          }
        return $this->render('default/clothing.html.twig',['objects'=>$search]);
    }



    // Searching on Beauty
    /**
    * @Route("/bsearch", name="bsearch", methods={"POST"})
    */
    public function searchBeauty(Request $request): Response{
        $str=ucwords($_POST["search"]);
        $items = new Beauty\Listing();
        $items->setOrderKey("RAND()", false);
        $search=[];
        foreach ($items as $item) {
            if(str_starts_with($item->getBrandName(),$str))
            {
                array_push($search,$item);
            }
          }
        return $this->render('default/beauty.html.twig',['objects'=>$search]);
    }

    //Searching on Footwear
    /**
    * @Route("/fsearch", name="fsearch", methods={"POST"})
    */
    public function searchFootwear(Request $request): Response{
        $str=ucwords($_POST["search"]);
        $items = new Footwear\Listing();
        $items->setOrderKey("RAND()", false);
        $search=[];
        foreach ($items as $item) {
            if(str_starts_with($item->getBrandName(),$str))
            {
                array_push($search,$item);
            }
          }
        return $this->render('default/footwear.html.twig',['objects'=>$search]);
    }


    //Searching on electronics
    /**
    * @Route("/esearch", name="esearch", methods={"POST"})
    */
    public function searchElectronics(Request $request): Response{
        $str=ucwords($_POST["search"]);
        $items = new Electronics\Listing();
        $items->setOrderKey("RAND()", false);
        $search=[];
        foreach ($items as $item) {
            if(str_starts_with($item->getBrandName(),$str))
            {
                array_push($search,$item);
            }
          }
        return $this->render('default/electronics.html.twig',['objects'=>$search]);
    }
}