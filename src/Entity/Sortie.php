<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sortie
 *
 * @ORM\Table(name="sortie")
 * @ORM\Entity
 */
class Sortie
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
     * @ORM\Column(name="reference_sortie", type="string", length=50, nullable=false)
     */
    private $referenceSortie;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_sortie", type="integer", nullable=false)
     */
    private $prixSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_sortie", type="string", length=255, nullable=false)
     */
    private $libelleSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="description_entree", type="string", length=255, nullable=false)
     */
    private $descriptionEntree;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferenceSortie(): ?string
    {
        return $this->referenceSortie;
    }

    public function setReferenceSortie(string $referenceSortie): self
    {
        $this->referenceSortie = $referenceSortie;

        return $this;
    }

    public function getPrixSortie(): ?int
    {
        return $this->prixSortie;
    }

    public function setPrixSortie(int $prixSortie): self
    {
        $this->prixSortie = $prixSortie;

        return $this;
    }

    public function getLibelleSortie(): ?string
    {
        return $this->libelleSortie;
    }

    public function setLibelleSortie(string $libelleSortie): self
    {
        $this->libelleSortie = $libelleSortie;

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


}
