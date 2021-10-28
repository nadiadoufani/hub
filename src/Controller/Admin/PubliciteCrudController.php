<?php

namespace App\Controller\Admin;

use App\Entity\Publicite;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PubliciteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Publicite::class;
    }

  
    public function configureFields(string $pageName): iterable
    {
        return [
           
            MoneyField::new('prix')->setCurrency('EUR'),
            DateTimeField::new('date'),
            ImageField::new('image')
               ->setBasePath('images/')
               ->setUploadDir('public/images')
               ->setUploadedFileNamePattern('[randomhash].[extension]'),
           
            
            TextareaField::new('discription'),
        ];
    }
   
}
