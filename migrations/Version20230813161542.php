<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230813161542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE food_waste (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year VARCHAR(255) NOT NULL, household INTEGER DEFAULT NULL, drain INTEGER DEFAULT NULL, public INTEGER DEFAULT NULL, restaurants INTEGER DEFAULT NULL, stores INTEGER DEFAULT NULL, wholesalers INTEGER DEFAULT NULL, industry INTEGER DEFAULT NULL, primary_production INTEGER DEFAULT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE food_waste');
    }
}
