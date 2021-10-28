<?php

namespace App\Controller\Admin;

use App\Entity\SalleDeProjection;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SalleDeProjectionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SalleDeProjection::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            
            IntegerField::new('nombre_de_place'),
            TextField::new('nom'),
            ImageField::new('image')
               ->setBasePath('images/')
               ->setUploadDir('public/images')
               ->setUploadedFileNamePattern('[randomhash].[extension]'),
            
        ];
    }
   
}
