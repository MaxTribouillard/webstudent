<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260219075202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eleve ADD epouvantard_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7B675DC60 FOREIGN KEY (epouvantard_id) REFERENCES epouvantard (id)');
        $this->addSql('CREATE INDEX IDX_ECA105F7B675DC60 ON eleve (epouvantard_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eleve DROP FOREIGN KEY FK_ECA105F7B675DC60');
        $this->addSql('DROP INDEX IDX_ECA105F7B675DC60 ON eleve');
        $this->addSql('ALTER TABLE eleve DROP epouvantard_id');
    }
}
