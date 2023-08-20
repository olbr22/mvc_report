<?php

namespace App\Entity;

use App\Repository\TextileConsumptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * TextileConsumption entity represents a textile_consumption table in var/data.db
 *
 * This will suppress ShortVariable warning in
 * this class.
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
#[ORM\Entity(repositoryClass: TextileConsumptionRepository::class)]
class TextileConsumption
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $year = null;

    #[ORM\Column(nullable: true)]
    private ?string $male = null;

    #[ORM\Column(nullable: true)]
    private ?string $female = null;

    #[ORM\Column(nullable: true)]
    private ?string $unisex = null;

    #[ORM\Column(nullable: true)]
    private ?string $household = null;

    #[ORM\Column(nullable: true)]
    private ?string $total = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getMale(): ?string
    {
        return $this->male;
    }

    public function setMale(?string $male): self
    {
        $this->male = $male;

        return $this;
    }

    public function getFemale(): ?string
    {
        return $this->female;
    }

    public function setFemale(?string $female): self
    {
        $this->female = $female;

        return $this;
    }

    public function getUnisex(): ?string
    {
        return $this->unisex;
    }

    public function setUnisex(?string $unisex): self
    {
        $this->unisex = $unisex;

        return $this;
    }

    public function getHousehold(): ?string
    {
        return $this->household;
    }

    public function setHousehold(?string $household): self
    {
        $this->household = $household;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(?string $total): self
    {
        $this->total = $total;

        return $this;
    }
}