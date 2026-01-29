<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260129145111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE eleve_competence (eleve_id INT NOT NULL, competence_id INT NOT NULL, INDEX IDX_96EE872DA6CC7B2 (eleve_id), INDEX IDX_96EE872D15761DAB (competence_id), PRIMARY KEY (eleve_id, competence_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE eleve_competence ADD CONSTRAINT FK_96EE872DA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE eleve_competence ADD CONSTRAINT FK_96EE872D15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eleve_competence DROP FOREIGN KEY FK_96EE872DA6CC7B2');
        $this->addSql('ALTER TABLE eleve_competence DROP FOREIGN KEY FK_96EE872D15761DAB');
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE eleve_competence');
    }
}
