<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArtisanRepository")
 */
class Artisan
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $last_name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $company;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $speciality;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $about;

    public function __construct()
    {
        $this->created_at = new \Datetime;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPictureArtisan(): ?string
    {
        return $this->picture_artisan;
    }

    public function setSpeciality(string $speciality): self
    {
        $this->speciality = $speciality;

        return $this;
    }

    public function getAbout(): ?string
    {
        return $this->about;
    }

    public function setAbout(string $about): self
    {
        $this->about = $about;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getSpeciality(): ?string
    {
        return $this->speciality;
    }

    public function getCreationDateArtisan(): ?\DateTimeInterface
    {
        return $this->creation_date_artisan;
    }

    public function setCreationDateArtisan(\DateTimeInterface $creation_date_artisan): self
    {
        $this->creation_date_artisan = $creation_date_artisan;

        return $this;
    }
}
