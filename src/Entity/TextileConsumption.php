<?php

namespace App\Entity;

use App\Repository\TextileConsumptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Represents the TextileConsumption entity, which corresponds to the textile_consumption table in the database.
 *
 * This class is responsible for storing and managing textile consumption data.
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

    /**
     * Get the ID of the TextileConsumption entity.
     *
     * @return int|null The ID of the entity.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the year associated with the textile consumption data.
     *
     * @return string|null The year of the data.
     */
    public function getYear(): ?string
    {
        return $this->year;
    }

    /**
     * Set the year associated with the textile consumption data.
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
     * Get the male textile consumption value.
     *
     * @return string|null The male consumption value.
     */
    public function getMale(): ?string
    {
        return $this->male;
    }

    /**
     * Set the male textile consumption value.
     *
     * @param string|null $male The male consumption value.
     * @return self
     */
    public function setMale(?string $male): self
    {
        $this->male = $male;

        return $this;
    }

    /**
     * Get the female textile consumption value.
     *
     * @return string|null The female consumption value.
     */
    public function getFemale(): ?string
    {
        return $this->female;
    }

    /**
     * Set the female textile consumption value.
     *
     * @param string|null $female The female consumption value.
     * @return self
     */
    public function setFemale(?string $female): self
    {
        $this->female = $female;

        return $this;
    }

    /**
     * Get the unisex textile consumption value.
     *
     * @return string|null The unisex consumption value.
     */
    public function getUnisex(): ?string
    {
        return $this->unisex;
    }

    /**
     * Set the unisex textile consumption value.
     *
     * @param string|null $unisex The unisex consumption value.
     * @return self
     */
    public function setUnisex(?string $unisex): self
    {
        $this->unisex = $unisex;

        return $this;
    }

    /**
     * Get the household textile consumption value.
     *
     * @return string|null The household consumption value.
     */
    public function getHousehold(): ?string
    {
        return $this->household;
    }

    /**
     * Set the household textile consumption value.
     *
     * @param string|null $household The household consumption value.
     * @return self
     */
    public function setHousehold(?string $household): self
    {
        $this->household = $household;

        return $this;
    }

    /**
     * Get the total textile consumption value.
     *
     * @return string|null The total consumption value.
     */
    public function getTotal(): ?string
    {
        return $this->total;
    }

    /**
     * Set the total textile consumption value.
     *
     * @param string|null $total The total consumption value.
     * @return self
     */
    public function setTotal(?string $total): self
    {
        $this->total = $total;

        return $this;
    }
}
