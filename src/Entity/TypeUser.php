<?php

namespace App\Entity;

use App\Repository\TypeUserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeUserRepository::class)
 */
class TypeUser
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
    private $LibelleTypeUser;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="Typeuser")
     */
    private $userss;


    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->userss = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleTypeUser(): ?string
    {
        return $this->LibelleTypeUser;
    }

    public function setLibelleTypeUser(string $LibelleTypeUser): self
    {
        $this->LibelleTypeUser = $LibelleTypeUser;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUserss(): Collection
    {
        return $this->userss;
    }

    public function addUserss(User $userss): self
    {
        if (!$this->userss->contains($userss)) {
            $this->userss[] = $userss;
            $userss->setTypeuser($this);
        }

        return $this;
    }

    public function removeUserss(User $userss): self
    {
        if ($this->userss->removeElement($userss)) {
            // set the owning side to null (unless already changed)
            if ($userss->getTypeuser() === $this) {
                $userss->setTypeuser(null);
            }
        }

        return $this;
    }
}
