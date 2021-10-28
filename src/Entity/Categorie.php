<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_de_categorie;

    
   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDeCategorie(): ?string
    {
        return $this->nom_de_categorie;
    }

    public function setNomDeCategorie(string $nom_de_categorie): self
    {
        $this->nom_de_categorie = $nom_de_categorie;

        return $this;
    }
    public function __toString() {
        return $this->nom_de_categorie;
    }

}
