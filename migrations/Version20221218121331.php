<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221218121331 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        //Limitaod a 3 caracteres porque refereirmos a cada idioma conforme ISO 639-1 (uno extra para posible migracióna iso 639 -[<=3])
        $this->addSql("ALTER TABLE usuario ADD locale VARCHAR(3) NOT NULL DEFAULT 'gl'");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE usuario DROP locale');
    }
}
