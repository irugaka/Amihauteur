<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hauteur
 *
 * @ORM\Table(name="hauteur")
 * @ORM\Entity
 */
class Hauteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="afranchir_hauteur", type="integer", nullable=true)
     */
    private $afranchirHauteur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAfranchirHauteur(): ?int
    {
        return $this->afranchirHauteur;
    }

    public function setAfranchirHauteur(?int $afranchirHauteur): self
    {
        $this->afranchirHauteur = $afranchirHauteur;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    

}
