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
    private $name_artisan;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $last_name_artisan;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $company_artisan;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $mail_artisan;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $picture_artisan;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $speciality;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $about;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameArtisan(): ?string
    {
        return $this->name_artisan;
    }

    public function setNameArtisan(string $name_artisan): self
    {
        $this->name_artisan = $name_artisan;

        return $this;
    }

    public function getLastNameArtisan(): ?string
    {
        return $this->last_name_artisan;
    }

    public function setLastNameArtisan(string $last_name_artisan): self
    {
        $this->last_name_artisan = $last_name_artisan;

        return $this;
    }

    public function getCompanyArtisan(): ?string
    {
        return $this->company_artisan;
    }

    public function setCompanyArtisan(string $company_artisan): self
    {
        $this->company_artisan = $company_artisan;

        return $this;
    }

    public function getMailArtisan(): ?string
    {
        return $this->mail_artisan;
    }

    public function setMailArtisan(string $mail_artisan): self
    {
        $this->mail_artisan = $mail_artisan;

        return $this;
    }

    public function getPictureArtisan(): ?string
    {
        return $this->picture_artisan;
    }

    public function setPictureArtisan(string $picture_artisan): self
    {
        $this->picture_artisan = $picture_artisan;

        return $this;
    }

    public function getSpeciality(): ?string
    {
        return $this->speciality;
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
}
