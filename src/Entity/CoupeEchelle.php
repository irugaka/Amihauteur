<?php

namespace App\Entity;

use App\Repository\CoupeEchelleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoupeEchelleRepository::class)
 */
class CoupeEchelle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Libelle;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $Longueur;

    /**
     * @var CoupeEchelleEchelle[]|Collection
     * @ORM\OneToMany(targetEntity=CoupeEchelleEchelle::class, mappedBy="CoupeEchelleId", cascade={"persist"})
     */
    private $coupeEchelleEchelles;

    /**
     * @ORM\Column(type="integer")
     */
    private $Prix;

    

    public function __construct()
    {
        $this->Echelle = new ArrayCollection();
        $this->coupeEchelleEchelles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function getLongueur(): ?string
    {
        return $this->Longueur;
    }

    public function setLongueur(int $Longueur): self
    {
        $this->Longueur = $Longueur;

        return $this;
    }

    /**
     * @return Collection|CoupeEchelleEchelle[]
     */
    public function getCoupeEchelleEchelles(): Collection
    {
        return $this->coupeEchelleEchelles;
    }

    public function addCoupeEchelleEchelle(CoupeEchelleEchelle $coupeEchelleEchelle): self
    {
        if (!$this->coupeEchelleEchelles->contains($coupeEchelleEchelle)) {
            $this->coupeEchelleEchelles[] = $coupeEchelleEchelle;
            $coupeEchelleEchelle->setCoupeEchelleId($this);
        }

        return $this;
    }

    public function removeCoupeEchelleEchelle(CoupeEchelleEchelle $coupeEchelleEchelle): self
    {
        if ($this->coupeEchelleEchelles->removeElement($coupeEchelleEchelle)) {
            // set the owning side to null (unless already changed)
            if ($coupeEchelleEchelle->getCoupeEchelleId() === $this) {
                $coupeEchelleEchelle->setCoupeEchelleId(null);
            }
        }

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

 
}
