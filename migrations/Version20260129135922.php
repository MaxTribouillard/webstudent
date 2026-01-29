<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260129135922 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE baguette_composition (baguette_id INT NOT NULL, composition_id INT NOT NULL, INDEX IDX_C6BE6A28513FF34B (baguette_id), INDEX IDX_C6BE6A2887A2E12 (composition_id), PRIMARY KEY (baguette_id, composition_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE baguette_composition ADD CONSTRAINT FK_C6BE6A28513FF34B FOREIGN KEY (baguette_id) REFERENCES baguette (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE baguette_composition ADD CONSTRAINT FK_C6BE6A2887A2E12 FOREIGN KEY (composition_id) REFERENCES composition (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE baguette_composition DROP FOREIGN KEY FK_C6BE6A28513FF34B');
        $this->addSql('ALTER TABLE baguette_composition DROP FOREIGN KEY FK_C6BE6A2887A2E12');
        $this->addSql('DROP TABLE baguette_composition');
    }
}
