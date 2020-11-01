<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $stacli;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $typecli;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=50,nullable=true)
     */
    private $nomem;

      /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $raison;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $adem;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStacli(): ?string
    {
        return $this->stacli;
    }

    public function setStacli(string $stacli): self
    {
        $this->stacli = $stacli;

        return $this;
    }

    public function getTypecli(): ?string
    {
        return $this->typecli;
    }

    public function setTypecli(string $typecli): self
    {
        $this->typecli = $typecli;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getNomem(): ?string
    {
        return $this->nomem;
    }

    public function setNomem(string $nomem): self
    {
        $this->nomem = $nomem;

        return $this;
    }

    public function getRaison(): ?string
    {
        return $this->raison;
    }

    public function setRaison(?string $raison): self
    {
        $this->raison = $raison;

        return $this;
    }

    public function getAdem(): ?string
    {
        return $this->adem;
    }

    public function setAdem(?string $adem): self
    {
        $this->adem = $adem;

        return $this;
    }

   
}
