<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240401145412 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE conversacion (id INT AUTO_INCREMENT NOT NULL, ultimo_mensaje_id INT NOT NULL, UNIQUE INDEX UNIQ_474049CF3EBCB904 (ultimo_mensaje_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mensaje (id INT AUTO_INCREMENT NOT NULL, conversacion_id INT DEFAULT NULL, usuario_id INT DEFAULT NULL, contenido VARCHAR(255) DEFAULT NULL, time_stamp DATE NOT NULL, INDEX IDX_9B631D01ABD5A1D6 (conversacion_id), INDEX IDX_9B631D01DB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participante (id INT AUTO_INCREMENT NOT NULL, conversacion_id INT NOT NULL, usuario_id INT DEFAULT NULL, INDEX IDX_85BDC5C3ABD5A1D6 (conversacion_id), INDEX IDX_85BDC5C3DB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE conversacion ADD CONSTRAINT FK_474049CF3EBCB904 FOREIGN KEY (ultimo_mensaje_id) REFERENCES mensaje (id)');
        $this->addSql('ALTER TABLE mensaje ADD CONSTRAINT FK_9B631D01ABD5A1D6 FOREIGN KEY (conversacion_id) REFERENCES conversacion (id)');
        $this->addSql('ALTER TABLE mensaje ADD CONSTRAINT FK_9B631D01DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE participante ADD CONSTRAINT FK_85BDC5C3ABD5A1D6 FOREIGN KEY (conversacion_id) REFERENCES conversacion (id)');
        $this->addSql('ALTER TABLE participante ADD CONSTRAINT FK_85BDC5C3DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conversacion DROP FOREIGN KEY FK_474049CF3EBCB904');
        $this->addSql('ALTER TABLE mensaje DROP FOREIGN KEY FK_9B631D01ABD5A1D6');
        $this->addSql('ALTER TABLE mensaje DROP FOREIGN KEY FK_9B631D01DB38439E');
        $this->addSql('ALTER TABLE participante DROP FOREIGN KEY FK_85BDC5C3ABD5A1D6');
        $this->addSql('ALTER TABLE participante DROP FOREIGN KEY FK_85BDC5C3DB38439E');
        $this->addSql('DROP TABLE conversacion');
        $this->addSql('DROP TABLE mensaje');
        $this->addSql('DROP TABLE participante');
    }
}
