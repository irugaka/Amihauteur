<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
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
    private $url;

    /**
     * @ORM\OneToOne(targetEntity=TypeEchelle::class, inversedBy="image", cascade={"persist", "remove"})
     */
    private $TypeEchelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getTypeEchelle(): ?TypeEchelle
    {
        return $this->TypeEchelle;
    }

    public function setTypeEchelle(?TypeEchelle $TypeEchelle): self
    {
        $this->TypeEchelle = $TypeEchelle;

        return $this;
    }
}
