<?php

namespace App\Entity;

use App\Repository\SalleDeProjectionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SalleDeProjectionRepository::class)
 */
class SalleDeProjection
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Cinema::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $id_cinema;

    /**
     * @ORM\OneToOne(targetEntity=Film::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $id_film;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_place;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCinema(): ?Cinema
    {
        return $this->id_cinema;
    }

    public function setIdCinema(?Cinema $id_cinema): self
    {
        $this->id_cinema = $id_cinema;

        return $this;
    }

    public function getIdFilm(): ?Film
    {
        return $this->id_film;
    }

    public function setIdFilm(Film $id_film): self
    {
        $this->id_film = $id_film;

        return $this;
    }

    public function getNombreDePlace(): ?int
    {
        return $this->nombre_de_place;
    }

    public function setNombreDePlace(int $nombre_de_place): self
    {
        $this->nombre_de_place = $nombre_de_place;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

   
}
