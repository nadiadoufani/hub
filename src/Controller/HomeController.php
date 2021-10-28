<?php

namespace App\Controller;


use App\Entity\Film;
use App\Entity\Publicite;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $publicite = $this->entityManager->getRepository(Publicite::class)->findAll();

        return $this->render('home/index.html.twig',[
            
                'publicite' =>$publicite   ]);
    }
     /**
     * @Route("/home/{id}", name="home_show")
    */
    public function show($id)
    {
        $film = $this->getDoctrine()
                      ->getRepository(Film::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/show.html.twig', [
                        'film' => $film]);
}

}