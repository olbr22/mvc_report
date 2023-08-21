<?php

namespace App\Entity;

use App\Repository\FoodWasteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Represents the FoodWaste entity, which corresponds to the food_waste table in the database.
 *
 * This class is responsible for storing and managing food waste data.
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

    /**
     * Get the ID of the FoodWaste entity.
     *
     * @return int|null The ID of the entity.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the source of the food waste data.
     *
     * @return string|null The source of the data.
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * Set the source of the food waste data.
     *
     * @param string $source The source of the data.
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get the year associated with the food waste data.
     *
     * @return string|null The year of the data.
     */
    public function getYear(): ?string
    {
        return $this->year;
    }

    /**
     * Set the year associated with the food waste data.
     *
     * @param string $year The year of the data.
     * @return self
     */
    public function setYear(string $year): self
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of the food waste data.
     *
     * @return string|null The value of the data.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Set the value of the food waste data.
     *
     * @param string|null $value The value of the data.
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
