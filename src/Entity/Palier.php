<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Palier
 *
 * @ORM\Table(name="palier")
 * @ORM\Entity
 */
class Palier
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
     * @ORM\Column(name="position_palier", type="string", length=255, nullable=false)
     */
    private $positionPalier;

    /**
     * @var int
     *
     * @ORM\Column(name="hauteur_palier", type="integer", nullable=false)
     */
    private $hauteurPalier;

    /**
     * @var int
     *
     * @ORM\Column(name="profondeur_palier", type="integer", nullable=false)
     */
    private $profondeurPalier;

    /**
     * @var int
     *
     * @ORM\Column(name="longueur_palier", type="integer", nullable=false)
     */
    private $longueurPalier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Echelle", mappedBy="palier")
     */
    private $echelle;

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

    public function getPositionPalier(): ?string
    {
        return $this->positionPalier;
    }

    public function setPositionPalier(string $positionPalier): self
    {
        $this->positionPalier = $positionPalier;

        return $this;
    }

    public function getHauteurPalier(): ?int
    {
        return $this->hauteurPalier;
    }

    public function setHauteurPalier(int $hauteurPalier): self
    {
        $this->hauteurPalier = $hauteurPalier;

        return $this;
    }

    public function getProfondeurPalier(): ?int
    {
        return $this->profondeurPalier;
    }

    public function setProfondeurPalier(int $profondeurPalier): self
    {
        $this->profondeurPalier = $profondeurPalier;

        return $this;
    }

    public function getLongueurPalier(): ?int
    {
        return $this->longueurPalier;
    }

    public function setLongueurPalier(int $longueurPalier): self
    {
        $this->longueurPalier = $longueurPalier;

        return $this;
    }

    /**
     * @return Collection|Echelle[]
     */
    public function getEchelle(): Collection
    {
        return $this->echelle;
    }

    public function addEchelle(Echelle $echelle): self
    {
        if (!$this->echelle->contains($echelle)) {
            $this->echelle[] = $echelle;
            $echelle->addPalier($this);
        }

        return $this;
    }

    public function removeEchelle(Echelle $echelle): self
    {
        if ($this->echelle->removeElement($echelle)) {
            $echelle->removePalier($this);
        }

        return $this;
    }

}
