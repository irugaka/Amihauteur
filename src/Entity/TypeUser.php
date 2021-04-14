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
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="TypeUser")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
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
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setTypeUser($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getTypeUser() === $this) {
                $user->setTypeUser(null);
            }
        }

        return $this;
    }
}
