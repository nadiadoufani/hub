<?php

namespace App\Controller\Admin;

use App\Entity\Film;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;

use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;


class FilmCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Film::class;
    }

  
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom_de_film'),
            TextField::new('realisateur'),
            AssociationField::new('id_categorie'),
            MoneyField::new('prix_film')->setCurrency('EUR'),
            ImageField::new('image')
               ->setBasePath('images/')
               ->setUploadDir('public/images')
               ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextareaField::new('discription'),
           

        ];
    }
   
}
