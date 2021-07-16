<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entree
 *
 * @ORM\Table(name="entree")
 * @ORM\Entity
 */
class Entree
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
     * @ORM\Column(name="reference_entree", type="string", length=50, nullable=false)
     */
    private $referenceEntree;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_entree", type="integer", nullable=false)
     */
    private $prixEntree;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_entree", type="string", length=255, nullable=false)
     */
    private $libelleEntree;

    /**
     * @var string
     *
     * @ORM\Column(name="description_entree", type="string", length=255, nullable=false)
     */
    private $descriptionEntree;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Commercialise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageUrl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferenceEntree(): ?string
    {
        return $this->referenceEntree;
    }

    public function setReferenceEntree(string $referenceEntree): self
    {
        $this->referenceEntree = $referenceEntree;

        return $this;
    }

    public function getPrixEntree(): ?int
    {
        return $this->prixEntree;
    }

    public function setPrixEntree(int $prixEntree): self
    {
        $this->prixEntree = $prixEntree;

        return $this;
    }

    public function getLibelleEntree(): ?string
    {
        return $this->libelleEntree;
    }

    public function setLibelleEntree(string $libelleEntree): self
    {
        $this->libelleEntree = $libelleEntree;

        return $this;
    }

    public function getDescriptionEntree(): ?string
    {
        return $this->descriptionEntree;
    }

    public function setDescriptionEntree(string $descriptionEntree): self
    {
        $this->descriptionEntree = $descriptionEntree;

        return $this;
    }

    public function getCommercialise(): ?bool
    {
        return $this->Commercialise;
    }

    public function setCommercialise(bool $Commercialise): self
    {
        $this->Commercialise = $Commercialise;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->ImageUrl;
    }

    public function setImageUrl(string $ImageUrl): self
    {
        $this->ImageUrl = $ImageUrl;

        return $this;
    }


}
