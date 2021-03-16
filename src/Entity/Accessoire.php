<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Accessoire
 *
 * @ORM\Table(name="accessoire")
 * @ORM\Entity
 */
class Accessoire
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
     * @ORM\Column(name="nom_accessoire", type="string", length=50, nullable=false)
     */
    private $nomAccessoire;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_accessoire", type="string", length=50, nullable=false)
     */
    private $refAccessoire;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_accessoire", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixAccessoire;

    /**
     * @var EchelleAccessoire[]|Collection
     * @ORM\OneToMany(targetEntity="App\Entity\EchelleAccessoire", mappedBy="accessory", cascade={"persist"})
     */
    private $EchelleAccessoire;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->EchelleAccessoire = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAccessoire(): ?string
    {
        return $this->nomAccessoire;
    }

    public function setNomAccessoire(string $nomAccessoire): self
    {
        $this->nomAccessoire = $nomAccessoire;

        return $this;
    }

    public function getRefAccessoire(): ?string
    {
        return $this->refAccessoire;
    }

    public function setRefAccessoire(string $refAccessoire): self
    {
        $this->refAccessoire = $refAccessoire;

        return $this;
    }

    public function getPrixAccessoire(): ?float
    {
        return $this->prixAccessoire;
    }

    public function setPrixAccessoire(float $prixAccessoire): self
    {
        $this->prixAccessoire = $prixAccessoire;

        return $this;
    }

    public function getEchelleAccessoire(): Collection
    {
        return $this->EchelleAccessoire;
    }

    public function setEchelleAccessoire(Collection $EchelleAccessoire): self
    {
        $this->EchelleAccessoire = $EchelleAccessoire;
        return $this;
    }

    public function addEchelleAccessoire(EchelleAccessoire $EchelleAccessoire): self
    {
        if (!$this->EchelleAccessoire->contains($EchelleAccessoire)) {
            $this->EchelleAccessoire->add($EchelleAccessoire);
            $EchelleAccessoire->setAccessoire($this);
        }
        return $this;
    }

    public function removeEchelleAccessoire(EchelleAccessoire $EchelleAccessoire): self
    {
        $this->EchelleAccessoire->removeElement($EchelleAccessoire);
        return $this;
    }

}
