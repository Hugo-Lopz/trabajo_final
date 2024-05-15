<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240515164338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY FK_A7BB0615F045077C');
        $this->addSql('DROP INDEX IDX_A7BB0615F045077C ON producto');
        $this->addSql('ALTER TABLE producto ADD segunda_mano TINYINT(1) NOT NULL, DROP descuento_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE producto ADD descuento_id INT DEFAULT NULL, DROP segunda_mano');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT FK_A7BB0615F045077C FOREIGN KEY (descuento_id) REFERENCES descuento (id)');
        $this->addSql('CREATE INDEX IDX_A7BB0615F045077C ON producto (descuento_id)');
    }
}
