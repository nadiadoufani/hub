<?php

namespace App\Controller;

use App\Entity\SalleDeProjection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SalledeprojectionController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/salledeprojection", name="salledeprojection")
     */
    public function index(): Response
    {
        $salledeprojection = $this->entityManager->getRepository(SalleDeProjection::class)->findAll();
        return $this->render('salledeprojection/index.html.twig', [
            'salledeprojection' =>$salledeprojection      ]);
    }
}
