<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Element
 *
 * @ORM\Table(name="element")
 * @ORM\Entity
 */
class Element
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
     * @ORM\Column(name="description_element", type="string", length=255, nullable=false)
     */
    private $descriptionElement;

    /**
     * @var int
     *
     * @ORM\Column(name="valeur_element", type="integer", nullable=false)
     */
    private $valeurElement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Norme", inversedBy="element")
     * @ORM\JoinTable(name="element_norme",
     *   joinColumns={
     *     @ORM\JoinColumn(name="element_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="norme_id", referencedColumnName="id")
     *   }
     * )
     */
    private $norme;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->norme = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionElement(): ?string
    {
        return $this->descriptionElement;
    }

    public function setDescriptionElement(string $descriptionElement): self
    {
        $this->descriptionElement = $descriptionElement;

        return $this;
    }

    public function getValeurElement(): ?int
    {
        return $this->valeurElement;
    }

    public function setValeurElement(int $valeurElement): self
    {
        $this->valeurElement = $valeurElement;

        return $this;
    }

    /**
     * @return Collection|Norme[]
     */
    public function getNorme(): Collection
    {
        return $this->norme;
    }

    public function addNorme(Norme $norme): self
    {
        if (!$this->norme->contains($norme)) {
            $this->norme[] = $norme;
        }

        return $this;
    }

    public function removeNorme(Norme $norme): self
    {
        $this->norme->removeElement($norme);

        return $this;
    }

}
