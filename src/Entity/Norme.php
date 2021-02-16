<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Norme
 *
 * @ORM\Table(name="norme")
 * @ORM\Entity
 */
class Norme
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
     * @ORM\Column(name="description_norme", type="string", length=255, nullable=false)
     */
    private $descriptionNorme;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Element", mappedBy="norme")
     */
    private $element;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->element = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionNorme(): ?string
    {
        return $this->descriptionNorme;
    }

    public function setDescriptionNorme(string $descriptionNorme): self
    {
        $this->descriptionNorme = $descriptionNorme;

        return $this;
    }

    /**
     * @return Collection|Element[]
     */
    public function getElement(): Collection
    {
        return $this->element;
    }

    public function addElement(Element $element): self
    {
        if (!$this->element->contains($element)) {
            $this->element[] = $element;
            $element->addNorme($this);
        }

        return $this;
    }

    public function removeElement(Element $element): self
    {
        if ($this->element->removeElement($element)) {
            $element->removeNorme($this);
        }

        return $this;
    }

}
