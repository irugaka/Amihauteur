<?php

namespace App\Entity;

use App\Repository\EchelleAccessoireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EchelleAccessoireRepository::class)
 */
class EchelleAccessoire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Echelle::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Echelle;

    /**
     * @ORM\ManyToOne(targetEntity=Accessoire::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Accessoire;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Column(nullable=true)
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

    public function getAccessoire(): ?Accessoire
    {
        return $this->Accessoire;
    }

    public function setAccessoire(?Accessoire $Accessoire): self
    {
        $this->Accessoire = $Accessoire;

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
