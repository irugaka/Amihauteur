<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Echelle
 *
 * @ORM\Table(name="echelle", indexes={@ORM\Index(name="IDX_DA65794D712551BC", columns={"echelle_type_echelle_id"}), @ORM\Index(name="IDX_DA65794D52EAF347", columns={"echelle_hauteur_id"}), @ORM\Index(name="IDX_DA65794D21127304", columns={"echelle_sortie_id"}), @ORM\Index(name="IDX_DA65794DB7242249", columns={"echelle_norme_id"}), @ORM\Index(name="IDX_DA65794DC9BBACD4", columns={"echelle_config_id"}), @ORM\Index(name="IDX_DA65794D421B7347", columns={"echelle_entree_id"})})
 * @ORM\Entity
 */
class Echelle
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
     * @var \Sortie
     *
     * @ORM\ManyToOne(targetEntity="Sortie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="echelle_sortie_id", referencedColumnName="id")
     * })
     */
    private $echelleSortie;

    /**
     * @var \Entree
     *
     * @ORM\ManyToOne(targetEntity="Entree")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="echelle_entree_id", referencedColumnName="id")
     * })
     */
    private $echelleEntree;

    /**
     * @var \Hauteur
     *
     * @ORM\ManyToOne(targetEntity="Hauteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="echelle_hauteur_id", referencedColumnName="id")
     * })
     */
    private $echelleHauteur;

    /**
     * @var \TypeEchelle
     *
     * @ORM\ManyToOne(targetEntity="TypeEchelle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="echelle_type_echelle_id", referencedColumnName="id")
     * })
     */
    private $echelleTypeEchelle;

    /**
     * @var \Norme
     *
     * @ORM\ManyToOne(targetEntity="Norme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="echelle_norme_id", referencedColumnName="id")
     * })
     */
    private $echelleNorme;

    /**
     * @var \Config
     *
     * @ORM\ManyToOne(targetEntity="Config")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="echelle_config_id", referencedColumnName="id")
     * })
     */
    private $echelleConfig;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ChangementVolee", inversedBy="echelle")
     * @ORM\JoinTable(name="echelle_changement_volee",
     *   joinColumns={
     *     @ORM\JoinColumn(name="echelle_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="changement_volee_id", referencedColumnName="id")
     *   }
     * )
     */
    private $changementVolee;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Fixation", inversedBy="echelle")
     * @ORM\JoinTable(name="echelle_fixation",
     *   joinColumns={
     *     @ORM\JoinColumn(name="echelle_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fixation_id", referencedColumnName="id")
     *   }
     * )
     */
    private $fixation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Palier", inversedBy="echelle")
     * @ORM\JoinTable(name="echelle_palier",
     *   joinColumns={
     *     @ORM\JoinColumn(name="echelle_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="palier_id", referencedColumnName="id")
     *   }
     * )
     */
    private $palier;

    /**
     * @var EchelleAccessoire[]|Collection
     * @ORM\OneToMany(targetEntity="App\Entity\EchelleAccessoire", mappedBy="Echelle", cascade={"persist", "remove"})
     */
    private $EchelleAccessoire;

    /**
     * @ORM\OneToMany(targetEntity=EchelleFixation::class, mappedBy="Echelle")
     */
    private $Fixation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->EchelleAccessoire = new ArrayCollection();
        $this->changementVolee = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fixation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->palier = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Fixation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEchelleSortie(): ?Sortie
    {
        return $this->echelleSortie;
    }

    public function setEchelleSortie(?Sortie $echelleSortie): self
    {
        $this->echelleSortie = $echelleSortie;

        return $this;
    }

    public function getEchelleEntree(): ?Entree
    {
        return $this->echelleEntree;
    }

    public function setEchelleEntree(?Entree $echelleEntree): self
    {
        $this->echelleEntree = $echelleEntree;

        return $this;
    }

    public function getEchelleHauteur(): ?Hauteur
    {
        return $this->echelleHauteur;
    }

    public function setEchelleHauteur(?Hauteur $echelleHauteur): self
    {
        $this->echelleHauteur = $echelleHauteur;

        return $this;
    }

    public function getEchelleTypeEchelle(): ?TypeEchelle
    {
        return $this->echelleTypeEchelle;
    }

    public function setEchelleTypeEchelle(?TypeEchelle $echelleTypeEchelle): self
    {
        $this->echelleTypeEchelle = $echelleTypeEchelle;

        return $this;
    }

    public function getEchelleNorme(): ?Norme
    {
        return $this->echelleNorme;
    }

    public function setEchelleNorme(?Norme $echelleNorme): self
    {
        $this->echelleNorme = $echelleNorme;

        return $this;
    }

    public function getEchelleConfig(): ?Config
    {
        return $this->echelleConfig;
    }

    public function setEchelleConfig(?Config $echelleConfig): self
    {
        $this->echelleConfig = $echelleConfig;

        return $this;
    }

    /**
     * @return Collection|ChangementVolee[]
     */
    public function getChangementVolee(): Collection
    {
        return $this->changementVolee;
    }

    public function addChangementVolee(ChangementVolee $changementVolee): self
    {
        if (!$this->changementVolee->contains($changementVolee)) {
            $this->changementVolee[] = $changementVolee;
        }

        return $this;
    }

    public function removeChangementVolee(ChangementVolee $changementVolee): self
    {
        $this->changementVolee->removeElement($changementVolee);

        return $this;
    }

    /**
     * @return Collection|Fixation[]
     */
    public function getFixation(): Collection
    {
        return $this->fixation;
    }

    public function addFixation(Fixation $fixation): self
    {
        if (!$this->fixation->contains($fixation)) {
            $this->fixation[] = $fixation;
        }

        return $this;
    }

    public function removeFixation(Fixation $fixation): self
    {
        $this->fixation->removeElement($fixation);

        return $this;
    }

    /**
     * @return Collection|Palier[]
     */
    public function getPalier(): Collection
    {
        return $this->palier;
    }

    public function addPalier(Palier $palier): self
    {
        if (!$this->palier->contains($palier)) {
            $this->palier[] = $palier;
        }

        return $this;
    }

    public function removePalier(Palier $palier): self
    {
        $this->palier->removeElement($palier);

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
            $EchelleAccessoire->setEchelle($this);
        }
        return $this;
    }

    public function removeEchelleAccessoire(EchelleAccessoire $EchelleAccessoire): self
    {
        $this->EchelleAccessoire->removeElement($EchelleAccessoire);
        return $this;
    }

}
