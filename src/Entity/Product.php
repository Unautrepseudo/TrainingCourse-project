<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $artisan_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $customer_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name_product;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $reference_product;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $picture_one;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $picture_two;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $picture_three;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $materials;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $artisan_company;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $artisan_name;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $artisan_picture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArtisanId(): ?int
    {
        return $this->artisan_id;
    }

    public function setArtisanId(int $artisan_id): self
    {
        $this->artisan_id = $artisan_id;

        return $this;
    }

    public function getCustomerId(): ?int
    {
        return $this->customer_id;
    }

    public function setCustomerId(int $customer_id): self
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    public function getNameProduct(): ?string
    {
        return $this->name_product;
    }

    public function setNameProduct(string $name_product): self
    {
        $this->name_product = $name_product;

        return $this;
    }

    public function getReferenceProduct(): ?string
    {
        return $this->reference_product;
    }

    public function setReferenceProduct(string $reference_product): self
    {
        $this->reference_product = $reference_product;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPictureOne(): ?string
    {
        return $this->picture_one;
    }

    public function setPictureOne(string $picture_one): self
    {
        $this->picture_one = $picture_one;

        return $this;
    }

    public function getPictureTwo(): ?string
    {
        return $this->picture_two;
    }

    public function setPictureTwo(?string $picture_two): self
    {
        $this->picture_two = $picture_two;

        return $this;
    }

    public function getPictureThree(): ?string
    {
        return $this->picture_three;
    }

    public function setPictureThree(?string $picture_three): self
    {
        $this->picture_three = $picture_three;

        return $this;
    }

    public function getMaterials(): ?string
    {
        return $this->materials;
    }

    public function setMaterials(string $materials): self
    {
        $this->materials = $materials;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getArtisanCompany(): ?string
    {
        return $this->artisan_company;
    }

    public function setArtisanCompany(string $artisan_company): self
    {
        $this->artisan_company = $artisan_company;

        return $this;
    }

    public function getArtisanName(): ?string
    {
        return $this->artisan_name;
    }

    public function setArtisanName(string $artisan_name): self
    {
        $this->artisan_name = $artisan_name;

        return $this;
    }

    public function getArtisanPicture(): ?string
    {
        return $this->artisan_picture;
    }

    public function setArtisanPicture(string $artisan_picture): self
    {
        $this->artisan_picture = $artisan_picture;

        return $this;
    }
}
