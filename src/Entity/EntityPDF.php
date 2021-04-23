<?php

namespace App\Entity;

use App\Repository\EntityPDFRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntityPDFRepository::class)
 */
class EntityPDF
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
    private $LibellePDF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LocationPDF;

    /**
     * @ORM\ManyToOne(targetEntity=Config::class, inversedBy="ConfigPDF", cascade={"persist"})
     */
    private $Config;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellePDF(): ?string
    {
        return $this->LibellePDF;
    }

    public function setLibellePDF(string $LibellePDF): self
    {
        $this->LibellePDF = $LibellePDF;

        return $this;
    }

    public function getLocationPDF(): ?string
    {
        return $this->LocationPDF;
    }

    public function setLocationPDF(string $LocationPDF): self
    {
        $this->LocationPDF = $LocationPDF;

        return $this;
    }

    public function getConfig(): ?Config
    {
        return $this->Config;
    }

    public function setConfig(?Config $Config): self
    {
        $this->Config = $Config;

        return $this;
    }
}
