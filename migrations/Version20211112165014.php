<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211112165014 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medicament CHANGE famille_id famille_id VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE offrir DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE offrir ADD PRIMARY KEY (medicament_id, rapport_id)');
        $this->addSql('ALTER TABLE visiteur CHANGE id id VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medicament CHANGE famille_id famille_id VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE offrir DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE offrir ADD PRIMARY KEY (rapport_id, medicament_id)');
        $this->addSql('ALTER TABLE visiteur CHANGE id id VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
    public function isTransactional(): bool
    {
        return false;
    }
}
