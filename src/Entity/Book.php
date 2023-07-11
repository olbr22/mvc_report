<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Book entity represents a table book in var/data.db
 *
 * This will suppress ShortVariable warning in
 * this class.
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    /**
     * @var int|null The ID of the book.
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var string|null The author of the book.
    */
    #[ORM\Column(type: Types::TEXT)]
    private ?string $author = null;

    /**
     * @var string|null The image of the book.
     */
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $image = null;

    /**
     * @var string|null The ISBN of the book.
     */
    #[ORM\Column(length: 13)]
    private ?string $isbn = null;

    /**
     * @var string|null The title of the book.
     */
    #[ORM\Column(type: Types::TEXT)]
    private ?string $title = null;

    /**
     * Get the ID of the book.
     *
     * @return int|null The ID of the book.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the title of the book.
     *
     * @return string|null The title of the book.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Set the title of the book.
     *
     * @param string $title The title of the book.
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the ISBN of the book.
     *
     * @return string|null The ISBN of the book.
     */
    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    /**
     * Set the ISBN of the book.
     *
     * @param string $isbn The ISBN of the book.
     * @return self
     */
    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the author of the book.
     *
     * @return string|null The author of the book.
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * Set the author of the book.
     *
     * @param string $author The author of the book.
     * @return self
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the image of the book.
     *
     * @return string|null The image of the book.
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * Set the image of the book.
     *
     * @param string|null $image The image of the book.
     * @return self
     */
    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

}
