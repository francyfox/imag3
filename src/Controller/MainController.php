<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('App:ProdVal')->findAll();
        $cat_list = $em->getRepository('App:CatVal')->findAll();
        $task = $em->getRepository('App:Task')->findAll();

        if (!$products ) {
            xdebug_var_dump($products);
        }else{
            return $this->render('main/index.html.twig', [
                'controller_name' => 'MainController',
                'products' => $products,
                'cat_list' => $cat_list,
                'task' => $task
            ]);
        }

    }
}
