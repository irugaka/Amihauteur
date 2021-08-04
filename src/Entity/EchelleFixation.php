<?php

namespace App\Entity;

use App\Repository\EchelleFixationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EchelleFixationRepository::class)
 */
class EchelleFixation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Echelle::class, inversedBy="Fixation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Echelle;

    /**
     * @ORM\ManyToOne(targetEntity=Fixation::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Fixation;

    /**
     * @ORM\Column(type="integer")
     */
    private $Qte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEchelle(): ?Echelle
    {
        return $this->Echelle;
    }

    public function setEchelle(?Echelle $Echelle): self
    {
        $this->Echelle = $Echelle;

        return $this;
    }

    public function getFixation(): ?Fixation
    {
        return $this->Fixation;
    }

    public function setFixation(?Fixation $Fixation): self
    {
        $this->Fixation = $Fixation;

        return $this;
    }

    public function getQte(): ?int
    {
        return $this->Qte;
    }

    public function setQte(int $Qte): self
    {
        $this->Qte = $Qte;

        return $this;
    }
}
