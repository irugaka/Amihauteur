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
     * @var string
     *
     * @ORM\Column(name="libelle_type_echelle", type="string", length=50, nullable=false)
     */
    private $libelleTypeEchelle;

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


}
