<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Fixation
 *
 * @ORM\Table(name="fixation")
 * @ORM\Entity
 */
class Fixation
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
     * @var int
     *
     * @ORM\Column(name="depart_fixation", type="integer", nullable=false)
     */
    private $departFixation;

    /**
     * @var int
     *
     * @ORM\Column(name="hauteur_relative_fixation", type="integer", nullable=false)
     */
    private $hauteurRelativeFixation;

    /**
     * @var int
     *
     * @ORM\Column(name="hauteur_absolue_fixation", type="integer", nullable=false)
     */
    private $hauteurAbsolueFixation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Echelle", mappedBy="fixation")
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

    public function getDepartFixation(): ?int
    {
        return $this->departFixation;
    }

    public function setDepartFixation(int $departFixation): self
    {
        $this->departFixation = $departFixation;

        return $this;
    }

    public function getHauteurRelativeFixation(): ?int
    {
        return $this->hauteurRelativeFixation;
    }

    public function setHauteurRelativeFixation(int $hauteurRelativeFixation): self
    {
        $this->hauteurRelativeFixation = $hauteurRelativeFixation;

        return $this;
    }

    public function getHauteurAbsolueFixation(): ?int
    {
        return $this->hauteurAbsolueFixation;
    }

    public function setHauteurAbsolueFixation(int $hauteurAbsolueFixation): self
    {
        $this->hauteurAbsolueFixation = $hauteurAbsolueFixation;

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
            $echelle->addFixation($this);
        }

        return $this;
    }

    public function removeEchelle(Echelle $echelle): self
    {
        if ($this->echelle->removeElement($echelle)) {
            $echelle->removeFixation($this);
        }

        return $this;
    }

}
