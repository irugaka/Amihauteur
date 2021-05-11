<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEchelle
 *
 * @ORM\Table(name="type_echelle")
 * @ORM\Entity
 */
class TypeEchelle
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
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_type_echelle", type="string", length=50, nullable=false)
     */
    private $libelleTypeEchelle;

    /**
     * @ORM\OneToOne(targetEntity=Image::class, mappedBy="TypeEchelle", cascade={"persist", "remove"})
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleTypeEchelle(): ?string
    {
        return $this->libelleTypeEchelle;
    }

    public function setLibelleTypeEchelle(string $libelleTypeEchelle): self
    {
        $this->libelleTypeEchelle = $libelleTypeEchelle;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage(): ?Image
    {
        return $this->image;
    }

    public function setImage(?Image $image): self
    {
        // unset the owning side of the relation if necessary
        if ($image === null && $this->image !== null) {
            $this->image->setTypeEchelle(null);
        }

        // set the owning side of the relation if necessary
        if ($image !== null && $image->getTypeEchelle() !== $this) {
            $image->setTypeEchelle($this);
        }

        $this->image = $image;

        return $this;
    }


}
