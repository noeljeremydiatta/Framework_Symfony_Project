<?php

namespace App\Entity;

use App\Repository\CompteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
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
    private $tyco;

    /**
     * @ORM\Column(type="integer")
     */
    private $agence;

    /**
     * @ORM\Column(type="integer")
     */
    private $rib;

    /**
     * @ORM\Column(type="integer")
     */
    private $numcompte;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="integer")
     */
    private $salaire;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $profession;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $frais;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $agios;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTyco(): ?string
    {
        return $this->tyco;
    }

    public function setTyco(string $tyco): self
    {
        $this->tyco = $tyco;

        return $this;
    }

    public function getAgence(): ?int
    {
        return $this->agence;
    }

    public function setAgence(int $agence): self
    {
        $this->agence = $agence;

        return $this;
    }

    public function getRib(): ?int
    {
        return $this->rib;
    }

    public function setRib(int $rib): self
    {
        $this->rib = $rib;

        return $this;
    }

    public function getNumcompte(): ?int
    {
        return $this->numcompte;
    }

    public function setNumcompte(int $numcompte): self
    {
        $this->numcompte = $numcompte;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getSalaire(): ?int
    {
        return $this->salaire;
    }

    public function setSalaire(int $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getFrais(): ?int
    {
        return $this->frais;
    }

    public function setFrais(?int $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

    public function getAgios(): ?int
    {
        return $this->agios;
    }

    public function setAgios(?int $agios): self
    {
        $this->agios = $agios;

        return $this;
    }
}
