<?php

namespace App\Entity;

use App\Repository\FoodWasteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * FoodWaste entity represents a table food_waste in var/data.db
 *
 * This will suppress ShortVariable warning in
 * this class.
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
#[ORM\Entity(repositoryClass: FoodWasteRepository::class)]
class FoodWaste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $source = null;

    #[ORM\Column(length: 255)]
    private ?string $year = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $value = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
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

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
