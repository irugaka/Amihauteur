<?php

namespace App\Entity;

use App\Repository\CoupeEchelleEchelleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoupeEchelleEchelleRepository::class)
 */
class CoupeEchelleEchelle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=CoupeEchelle::class, inversedBy="coupeEchelleEchelles")
     */
    private $CoupeEchelleId;

    /**
     * @ORM\ManyToOne(targetEntity=Echelle::class, inversedBy="coupeEchelleEchelles")
     */
    private $EchelleId;

    /**
     * @ORM\Column(type="integer")
     */
    private $Qte;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoupeEchelleId(): ?CoupeEchelle
    {
        return $this->CoupeEchelleId;
    }

    public function setCoupeEchelleId(?CoupeEchelle $CoupeEchelleId): self
    {
        $this->CoupeEchelleId = $CoupeEchelleId;

        return $this;
    }

    public function getEchelleId(): ?Echelle
    {
        return $this->EchelleId;
    }

    public function setEchelleId(?Echelle $EchelleId): self
    {
        $this->EchelleId = $EchelleId;

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
