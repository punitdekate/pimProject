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
        return $this->render('default/header.html.twig');
    }

    // footer page
    /**
     * @param Request $request
     * @return Response
     */
    public function footer(Request $request): Response
    {
        return $this->render('default/footer.html.twig');

    }

    // electronics page
    public function electronics(Request $request): Response
    {
        return $this->render('default/electronics.html.twig');

    }
    
    // clothing page
    public function clothing(Request $request): Response
    {
        return $this->render('default/clothing.html.twig');

    }

    // clothing page
    public function beauty(Request $request): Response
    {
        return $this->render('default/beauty.html.twig');

    }

    // clothing page
    public function footwear(Request $request): Response
    {
        return $this->render('default/footwear.html.twig');

    }



    //  do listing of objects for clothing class
    /**
     * @Route("/clothing", name="clothing", methods={"GET","POST"})
     */
    public function showClothing(Request $request):Response
    {
        $cItems = new Clothing\Listing();
        $cItems->setOrderKey("price");
        $cItems->setOrder("asc");

        return $this->render('default/clothing.html.twig',['objects'=>$cItems]);
    }



    //  do listing of objects for electronics class
    /**
     * @Route("/electronics", name="electronics", methods={"GET","POST"})
     */
    public function showElectronics(Request $request):Response
    {
        $eItems = new Electronics\Listing();
        $eItems->setOrderKey("price");
        $eItems->setOrder("asc");
        return $this->render('default/electronics.html.twig',['objects'=>$eItems]);
    }


    //  do listing of objects for clothing class
    /**
     * @Route("/footwear", name="footwear", methods={"GET","POST"})
     */
    public function showFootwear(Request $request):Response
    {
        $fItems = new Footwear\Listing();
        $fItems->setOrderKey("RAND()", false);
        return $this->render('default/footwear.html.twig',['objects'=>$fItems]);
    }


    //  do listing of objects for clothing class
    /**
     * @Route("/beauty", name="beauty", methods={"GET","POST"})
     */
    public function showBeauty(Request $request):Response
    {
        $bItems = new Beauty\Listing();
        $bItems->setOrderKey("RAND()", false);
        return $this->render('default/beauty.html.twig',['objects'=>$bItems]);
    }


     // feedback page
    /**
     * @param Request $request
     * @return Response
     */
    public function feedback(Request $request): Response
    {
        return $this->render('default/feedback.html.twig');
    }



    // Email trigger on feedback form
    /**
     * @Route("/submit", name="submit", methods={"POST"})
     */

     public function submit(Request $request): Response

     {
        $mail = new \Pimcore\Mail();
        $mail->to('punitdekateofficial@gmail.com');
        $str =$_POST['fname']." ".$_POST['lname']." has provided the feedback that is:  ".$_POST['message'];
        $mail->text($str);
        $mail->send();
        
        $obj=new Feedback();
        $obj->setKey("feedback".time());
        $obj->setParentId(55);
        $obj->setFirstName($_POST["fname"]);
        $obj->setLastName($_POST["lname"]);
        $obj->setEmail($_POST["email"]);
        $obj->setFeedback($_POST["message"]);
        $obj->save();
        return $this->render('default/email.html.twig',['name'=>$_POST["fname"]]);
    }
}

