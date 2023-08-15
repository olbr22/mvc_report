<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230814181300 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__food_waste AS SELECT id, year FROM food_waste');
        $this->addSql('DROP TABLE food_waste');
        $this->addSql('CREATE TABLE food_waste (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year VARCHAR(255) NOT NULL, source VARCHAR(255) NOT NULL, value VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO food_waste (id, year) SELECT id, year FROM __temp__food_waste');
        $this->addSql('DROP TABLE __temp__food_waste');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__food_waste AS SELECT id, year FROM food_waste');
        $this->addSql('DROP TABLE food_waste');
        $this->addSql('CREATE TABLE food_waste (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year VARCHAR(255) NOT NULL, household INTEGER DEFAULT NULL, drain INTEGER DEFAULT NULL, public INTEGER DEFAULT NULL, restaurants INTEGER DEFAULT NULL, stores INTEGER DEFAULT NULL, wholesalers INTEGER DEFAULT NULL, industry INTEGER DEFAULT NULL, primary_production INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO food_waste (id, year) SELECT id, year FROM __temp__food_waste');
        $this->addSql('DROP TABLE __temp__food_waste');
    }
}
