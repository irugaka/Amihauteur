<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Accessoire
 *
 * @ORM\Table(name="accessoire")
 * @ORM\Entity
 */
class Accessoire
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
     * @var string
     *
     * @ORM\Column(name="nom_accessoire", type="string", length=50, nullable=false)
     */
    private $nomAccessoire;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_accessoire", type="string", length=50, nullable=false)
     */
    private $refAccessoire;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_accessoire", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixAccessoire;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->echelle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAccessoire(): ?string
    {
        return $this->nomAccessoire;
    }

    public function setNomAccessoire(string $nomAccessoire): self
    {
        $this->nomAccessoire = $nomAccessoire;

        return $this;
    }

    public function getRefAccessoire(): ?string
    {
        return $this->refAccessoire;
    }

    public function setRefAccessoire(string $refAccessoire): self
    {
        $this->refAccessoire = $refAccessoire;

        return $this;
    }

    public function getPrixAccessoire(): ?float
    {
        return $this->prixAccessoire;
    }

    public function setPrixAccessoire(float $prixAccessoire): self
    {
        $this->prixAccessoire = $prixAccessoire;

        return $this;
    }

}
