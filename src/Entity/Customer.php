<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 */
class Customer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $name_customer;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $last_name_customer;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $mail_customer;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $password_customer;

    /**
     * @ORM\Column(type="datetime")
     */
    private $birth_date_customer;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $city;

    /**
     * @ORM\Column(type="integer")
     */
    private $zip_code;

    /**
     * @ORM\Column(type="integer")
     */
    private $phone_number;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creation_date_customer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameCustomer(): ?string
    {
        return $this->name_customer;
    }

    public function setNameCustomer(string $name_customer): self
    {
        $this->name_customer = $name_customer;

        return $this;
    }

    public function getLastNameCustomer(): ?string
    {
        return $this->last_name_customer;
    }

    public function setLastNameCustomer(string $last_name_customer): self
    {
        $this->last_name_customer = $last_name_customer;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getMailCustomer(): ?string
    {
        return $this->mail_customer;
    }

    public function setMailCustomer(string $mail_customer): self
    {
        $this->mail_customer = $mail_customer;

        return $this;
    }

    public function getPasswordCustomer(): ?string
    {
        return $this->password_customer;
    }

    public function setPasswordCustomer(string $password_customer): self
    {
        $this->password_customer = $password_customer;

        return $this;
    }

    public function getBirthDateCustomer(): ?\DateTimeInterface
    {
        return $this->birth_date_customer;
    }

    public function setBirthDateCustomer(\DateTimeInterface $birth_date_customer): self
    {
        $this->birth_date_customer = $birth_date_customer;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZipCode(): ?int
    {
        return $this->zip_code;
    }

    public function setZipCode(int $zip_code): self
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    public function getPhoneNumber(): ?int
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(int $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function getCreationDateCustomer(): ?\DateTimeInterface
    {
        return $this->creation_date_customer;
    }

    public function setCreationDateCustomer(\DateTimeInterface $creation_date_customer): self
    {
        $this->creation_date_customer = $creation_date_customer;

        return $this;
    }
}
