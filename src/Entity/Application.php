<?php

namespace App\Entity;

use App\Repository\ApplicationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ApplicationRepository::class)]
class Application
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $databaseUser = null;

    #[ORM\Column(length: 255)]
    private ?string $databaseName = null;

    #[ORM\Column(length: 255)]
    private ?string $databasePassword = null;

    #[ORM\Column(length: 255)]
    private ?string $databaseHost = null;

    #[ORM\Column]
    private ?bool $active = null;

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

    public function getDatabaseUser(): ?string
    {
        return $this->databaseUser;
    }

    public function setDatabaseUser(string $databaseUser): self
    {
        $this->databaseUser = $databaseUser;

        return $this;
    }

    public function getDatabaseName(): ?string
    {
        return $this->databaseName;
    }

    public function setDatabaseName(string $databaseName): self
    {
        $this->databaseName = $databaseName;

        return $this;
    }

    public function getDatabasePassword(): ?string
    {
        return $this->databasePassword;
    }

    public function setDatabasePassword(string $databasePassword): self
    {
        $this->databasePassword = $databasePassword;

        return $this;
    }

    public function getDatabaseHost(): ?string
    {
        return $this->databaseHost;
    }

    public function setDatabaseHost(string $databaseHost): self
    {
        $this->databaseHost = $databaseHost;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
