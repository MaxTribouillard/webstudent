<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260129145535 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE professeur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATE DEFAULT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE professeur_competence (professeur_id INT NOT NULL, competence_id INT NOT NULL, INDEX IDX_3069FE32BAB22EE9 (professeur_id), INDEX IDX_3069FE3215761DAB (competence_id), PRIMARY KEY (professeur_id, competence_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE professeur_competence ADD CONSTRAINT FK_3069FE32BAB22EE9 FOREIGN KEY (professeur_id) REFERENCES professeur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE professeur_competence ADD CONSTRAINT FK_3069FE3215761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE professeur_competence DROP FOREIGN KEY FK_3069FE32BAB22EE9');
        $this->addSql('ALTER TABLE professeur_competence DROP FOREIGN KEY FK_3069FE3215761DAB');
        $this->addSql('DROP TABLE professeur');
        $this->addSql('DROP TABLE professeur_competence');
    }
}
