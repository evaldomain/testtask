<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UzduotisRepository")
 */
class Uzduotis
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Pavadinimas;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $vartotojas;

    public function getId()
    {
        return $this->id;
    }

    public function getPavadinimas(): ?string
    {
        return $this->Pavadinimas;
    }

    public function setPavadinimas(?string $Pavadinimas): self
    {
        $this->Pavadinimas = $Pavadinimas;

        return $this;
    }

    public function getVartotojas(): ?string
    {
        return $this->vartotojas;
    }

    public function setVartotojas(?string $vartotojas): self
    {
        $this->vartotojas = $vartotojas;

        return $this;
    }
}
