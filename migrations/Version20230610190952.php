<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230610190952 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__book AS SELECT id, author, image, isbn, title FROM book');
        $this->addSql('DROP TABLE book');
        $this->addSql('CREATE TABLE book (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, author CLOB NOT NULL, image CLOB DEFAULT NULL, isbn VARCHAR(13) NOT NULL, title CLOB NOT NULL)');
        $this->addSql('INSERT INTO book (id, author, image, isbn, title) SELECT id, author, image, isbn, title FROM __temp__book');
        $this->addSql('DROP TABLE __temp__book');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__book AS SELECT id, author, image, isbn, title FROM book');
        $this->addSql('DROP TABLE book');
        $this->addSql('CREATE TABLE book (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, author VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, isbn VARCHAR(13) NOT NULL, title CLOB NOT NULL)');
        $this->addSql('INSERT INTO book (id, author, image, isbn, title) SELECT id, author, image, isbn, title FROM __temp__book');
        $this->addSql('DROP TABLE __temp__book');
    }
}
