<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table(name="config")
 * @ORM\Entity
 */
class Config
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
     * @ORM\Column(name="nom_config", type="string", length=50, nullable=false)
     */
    private $nomConfig;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_config", type="string", length=255, nullable=false)
     */
    private $referenceConfig;

    /**
     * @var string
     *
     * @ORM\Column(name="description_config", type="string", length=255, nullable=false)
     */
    private $descriptionConfig;

    /**
     * @var int
     *
     * @ORM\Column(name="remise_config", type="integer", nullable=false)
     */
    private $remiseConfig;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomConfig(): ?string
    {
        return $this->nomConfig;
    }

    public function setNomConfig(string $nomConfig): self
    {
        $this->nomConfig = $nomConfig;

        return $this;
    }

    public function getReferenceConfig(): ?string
    {
        return $this->referenceConfig;
    }

    public function setReferenceConfig(string $referenceConfig): self
    {
        $this->referenceConfig = $referenceConfig;

        return $this;
    }

    public function getDescriptionConfig(): ?string
    {
        return $this->descriptionConfig;
    }

    public function setDescriptionConfig(string $descriptionConfig): self
    {
        $this->descriptionConfig = $descriptionConfig;

        return $this;
    }

    public function getRemiseConfig(): ?int
    {
        return $this->remiseConfig;
    }

    public function setRemiseConfig(int $remiseConfig): self
    {
        $this->remiseConfig = $remiseConfig;

        return $this;
    }


}
