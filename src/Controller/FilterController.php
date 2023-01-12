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
use Symfony\Component\Routing\Annotation\Route;



class FilterController extends FrontendController
{   
// ***********************************************filtering for Clothing class*******************************************
     /**
     * @Route("/gents", name="gents", methods={"GET","POST"})
     */
     public function showGentsClothes(Request $request): Response
     {
         $items = new Clothing\Listing();
         $items->setOrderKey("price");
         $items->setOrder("asc");
         $Gents=[];
         foreach ($items as $item) {
             if($item->getGender()=="Men")
             {
                   array_push($Gents,$item);
             }
           }
         return $this->render('default/clothing.html.twig',['objects'=>$Gents]);
     }
     /**
     * @Route("/ladies", name="ladies", methods={"GET","POST"})
     */
    public function showLadiesClothes(Request $request): Response
    {
        $items = new Clothing\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");
        $Ladies=[];
        foreach ($items as $item) {
            if($item->getGender()=="Women")
            {
                  array_push($Ladies,$item);
            }
          }
        return $this->render('default/clothing.html.twig',['objects'=>$Ladies]);
    }


// ***********************************************filtering for Footwear class*******************************************


// filtering for footwear gents class
     /**
     * @Route("/fgents", name="fgents", methods={"GET","POST"})
     */
    public function showGentsFootwear(Request $request): Response
    {
        $items = new Footwear\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");
        $Gents=[];
        foreach ($items as $item) {
            if($item->getGender()=="Men")
            {
                  array_push($Gents,$item);
            }
          }
        return $this->render('default/footwear.html.twig',['objects'=>$Gents]);
    }

// filtering for footwear ladies class
    /**
     * @Route("/fladies", name="fladies", methods={"GET","POST"})
     */
    public function showLadiesFootwear(Request $request): Response
    {
        $items = new Footwear\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");
        $Ladies=[];
        foreach ($items as $item) {
            if($item->getGender()=="Women")
            {
                  array_push($Ladies,$item);
            }
          }
        return $this->render('default/footwear.html.twig',['objects'=>$Ladies]);
    }
     
// ***********************************************filtering for Electronics class*******************************************


// filtering for  electronics mobile class
    /**
     * @Route("/mobile", name="mobile", methods={"GET","POST"})
     */
    public function showMobile(Request $request): Response
    {
        $items = new Electronics\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");
        $Mobile=[];
        foreach ($items as $item) {
            if($item->getProductType()=="Mobile")
            {
                  array_push($Mobile,$item);
            }
          }
        return $this->render('default/electronics.html.twig',['objects'=>$Mobile]);
    }

    // filtering for  electronics laptop class
    /**
     * @Route("/laptop", name="laptop", methods={"GET","POST"})
     */
    public function showLaptop(Request $request): Response
    {
        $items = new Electronics\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");
        $Laptop=[];
        foreach ($items as $item) {
            if($item->getProductType()=="Laptop")
            {
                  array_push($Laptop,$item);
            }
          }
        return $this->render('default/electronics.html.twig',['objects'=>$Laptop]);
    }


    // filtering for  electronics earphone class
    /**
     * @Route("/earphone", name="earphone", methods={"GET","POST"})
     */
    public function earphoneLaptop(Request $request): Response
    {
        $items = new Electronics\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");
        $earphone=[];
        foreach ($items as $item) {
            if($item->getProductType()=="Earphone")
            {
                  array_push($earphone,$item);
            }
          }
        return $this->render('default/electronics.html.twig',['objects'=>$earphone]);
    }


    // filtering for  electronics earphone class
    /**
     * @Route("/watch", name="watch", methods={"GET","POST"})
     */
    public function showWatch(Request $request): Response
    {
        $items = new Electronics\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");
        $Watch=[];
        foreach ($items as $item) {
            if($item->getProductType()=="Smartwatch")
            {
                  array_push($Watch,$item);
            }
          }
        return $this->render('default/electronics.html.twig',['objects'=>$Watch]);
    }

// ***********************************************filtering for Beauty class*******************************************


// filtering for  beauty Makeup class
    /**
     * @Route("/makeup", name="makeup", methods={"GET","POST"})
     */
    public function showMakeup(Request $request): Response
    {
        $items = new Beauty\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");
        $Makeup=[];
        foreach ($items as $item) {
            if($item->getProductFor()=="Makeup")
            {
                  array_push($Makeup,$item);
            }
          }
        return $this->render('default/beauty.html.twig',['objects'=>$Makeup]);
    }

// filtering for  beauty Makeup class
    /**
     * @Route("/hair", name="hair", methods={"GET","POST"})
     */
    public function showHaircare(Request $request): Response
    {
        $items = new Beauty\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");
        $Hair=[];
        foreach ($items as $item) {
            if($item->getProductFor()=="Hair")
            {
                  array_push($Hair,$item);
            }
          }
        return $this->render('default/beauty.html.twig',['objects'=>$Hair]);
    }


// filtering for  beauty Makeup class
    /**
     * @Route("/fragrance", name="fragrance", methods={"GET","POST"})
     */
    public function showFragrance(Request $request): Response
    {
        $items = new Beauty\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");
        $Fragrance=[];
        foreach ($items as $item) {
            if($item->getProductFor()=="Fragrance")
            {
                  array_push($Fragrance,$item);
            }
          }
        return $this->render('default/beauty.html.twig',['objects'=>$Fragrance]);
    }

// filtering for  beauty Makeup class
    /**
     * @Route("/skincare", name="skincare", methods={"GET","POST"})
     */
    public function showSkincare(Request $request): Response
    {
        $items = new Beauty\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");
        $SkinCare=[];
        foreach ($items as $item) {
            if($item->getProductFor()=="Skin")
            {
                  array_push($SkinCare,$item);
            }
          }
        return $this->render('default/beauty.html.twig',['objects'=>$SkinCare]);
    }




}