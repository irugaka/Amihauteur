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
     * @var EchelleFixation[]|Collection
     * @ORM\OneToMany(targetEntity="App\Entity\EchelleFixation", mappedBy="fixation", cascade={"persist"})
     */
    private $EchelleFixation;

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

    public function getEchelleFixation(): Collection
    {
        return $this->EchelleFixation;
    }

    public function addEchelleFixation(EchelleFixation $EchelleFixation): self
    {
        if (!$this->EchelleFixation->contains($EchelleFixation)) {
            $this->EchelleFixation->add($EchelleFixation);
            $EchelleFixation->setFixation($this);
        }
        return $this;
    }

    public function removeEchelleFixation(EchelleFixation $EchelleFixation): self
    {
        $this->EchelleFixation->removeElement($EchelleFixation);
        return $this;
    }

}
