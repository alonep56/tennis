<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PropertyRepository;


Class HomeController extends AbstractController
{
    /**
  * @Route("/", name="home")
  * @return Response
  */

  public function index(): Response
  {

    // $ground = $repository->findLatest();
    // // dump($properties);


    return $this->render('pages/home.html.twig', [

    ]);
  }
}
