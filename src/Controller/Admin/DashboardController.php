<?php

namespace App\Controller\Admin;

use App\Entity\Film;
use App\Entity\Categorie;
use App\Entity\Publicite;
use App\Entity\SalleDeProjection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/login", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gestioncinema');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('film', 'fas fa-list', Film::class);
        yield MenuItem::linkToCrud('publicite', 'fas fa-list', Publicite::class);
        yield MenuItem::linkToCrud('salledeprojection', 'fas fa-list', SalleDeProjection::class);
        yield MenuItem::linkToCrud('categorie', 'fas fa-list', Categorie::class);
    }
}
