<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ChangementVolee
 *
 * @ORM\Table(name="changement_volee")
 * @ORM\Entity
 */
class ChangementVolee
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
     * @ORM\Column(name="mesure_changement", type="integer", nullable=false)
     */
    private $mesureChangement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Echelle", mappedBy="changementVolee")
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

    public function getMesureChangement(): ?int
    {
        return $this->mesureChangement;
    }

    public function setMesureChangement(int $mesureChangement): self
    {
        $this->mesureChangement = $mesureChangement;

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
            $echelle->addChangementVolee($this);
        }

        return $this;
    }

    public function removeEchelle(Echelle $echelle): self
    {
        if ($this->echelle->removeElement($echelle)) {
            $echelle->removeChangementVolee($this);
        }

        return $this;
    }

}
