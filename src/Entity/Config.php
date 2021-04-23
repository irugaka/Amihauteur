<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity=EntityPDF::class, mappedBy="Config", cascade={"persist"})
     */
    private $ConfigPDF;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="ConfigUser", cascade={"persist"})
     */
    private $User;

    public function __construct()
    {
        $this->ConfigPDF = new ArrayCollection();
    }

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

    /**
     * @return Collection|EntityPDF[]
     */
    public function getConfigPDF(): Collection
    {
        return $this->ConfigPDF;
    }

    public function addConfigPDF(EntityPDF $configPDF): self
    {
        if (!$this->ConfigPDF->contains($configPDF)) {
            $this->ConfigPDF[] = $configPDF;
            $configPDF->setConfig($this);
        }

        return $this;
    }

    public function removeConfigPDF(EntityPDF $configPDF): self
    {
        if ($this->ConfigPDF->removeElement($configPDF)) {
            // set the owning side to null (unless already changed)
            if ($configPDF->getConfig() === $this) {
                $configPDF->setConfig(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }


}
