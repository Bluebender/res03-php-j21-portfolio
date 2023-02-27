<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $first_technology = null;

    #[ORM\Column(length: 255)]
    private ?string $second_technology = null;

    #[ORM\Column(length: 1023)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstTechnology(): ?string
    {
        return $this->first_technology;
    }

    public function setFirstTechnology(string $first_technology): self
    {
        $this->first_technology = $first_technology;

        return $this;
    }

    public function getSecondTechnology(): ?string
    {
        return $this->second_technology;
    }

    public function setSecondTechnology(string $second_technology): self
    {
        $this->second_technology = $second_technology;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
