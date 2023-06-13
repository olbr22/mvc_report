<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230613115139 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__book AS SELECT book_id, author, image, isbn, title FROM book');
        $this->addSql('DROP TABLE book');
        $this->addSql('CREATE TABLE book (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, author CLOB NOT NULL, image CLOB DEFAULT NULL, isbn VARCHAR(13) NOT NULL, title CLOB NOT NULL)');
        $this->addSql('INSERT INTO book (id, author, image, isbn, title) SELECT book_id, author, image, isbn, title FROM __temp__book');
        $this->addSql('DROP TABLE __temp__book');
        $this->addSql('CREATE TEMPORARY TABLE __temp__product AS SELECT product_id, name, value FROM product');
        $this->addSql('DROP TABLE product');
        $this->addSql('CREATE TABLE product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, value INTEGER NOT NULL)');
        $this->addSql('INSERT INTO product (id, name, value) SELECT product_id, name, value FROM __temp__product');
        $this->addSql('DROP TABLE __temp__product');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__book AS SELECT id, author, image, isbn, title FROM book');
        $this->addSql('DROP TABLE book');
        $this->addSql('CREATE TABLE book (book_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, author CLOB NOT NULL, image CLOB DEFAULT NULL, isbn VARCHAR(13) NOT NULL, title CLOB NOT NULL)');
        $this->addSql('INSERT INTO book (book_id, author, image, isbn, title) SELECT id, author, image, isbn, title FROM __temp__book');
        $this->addSql('DROP TABLE __temp__book');
        $this->addSql('CREATE TEMPORARY TABLE __temp__product AS SELECT id, name, value FROM product');
        $this->addSql('DROP TABLE product');
        $this->addSql('CREATE TABLE product (product_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, value INTEGER NOT NULL)');
        $this->addSql('INSERT INTO product (product_id, name, value) SELECT id, name, value FROM __temp__product');
        $this->addSql('DROP TABLE __temp__product');
    }
}
