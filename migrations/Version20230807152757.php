<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230807152757 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__textile_consumption AS SELECT id, year, female, unisex, household, total FROM textile_consumption');
        $this->addSql('DROP TABLE textile_consumption');
        $this->addSql('CREATE TABLE textile_consumption (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year INTEGER NOT NULL, female DOUBLE PRECISION DEFAULT NULL, unisex DOUBLE PRECISION DEFAULT NULL, household DOUBLE PRECISION DEFAULT NULL, total DOUBLE PRECISION DEFAULT NULL)');
        $this->addSql('INSERT INTO textile_consumption (id, year, female, unisex, household, total) SELECT id, year, female, unisex, household, total FROM __temp__textile_consumption');
        $this->addSql('DROP TABLE __temp__textile_consumption');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__textile_consumption AS SELECT id, year, female, unisex, household, total FROM textile_consumption');
        $this->addSql('DROP TABLE textile_consumption');
        $this->addSql('CREATE TABLE textile_consumption (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year INTEGER NOT NULL, female INTEGER DEFAULT NULL, unisex INTEGER DEFAULT NULL, household INTEGER DEFAULT NULL, total INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO textile_consumption (id, year, female, unisex, household, total) SELECT id, year, female, unisex, household, total FROM __temp__textile_consumption');
        $this->addSql('DROP TABLE __temp__textile_consumption');
    }
}
