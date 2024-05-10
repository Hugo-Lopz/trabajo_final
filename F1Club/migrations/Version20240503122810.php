<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240503122810 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE posts (id INT AUTO_INCREMENT NOT NULL, usuarios_id INT NOT NULL, temas_id INT NOT NULL, INDEX IDX_885DBAFAF01D3B25 (usuarios_id), INDEX IDX_885DBAFA64047268 (temas_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temas (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE posts ADD CONSTRAINT FK_885DBAFAF01D3B25 FOREIGN KEY (usuarios_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE posts ADD CONSTRAINT FK_885DBAFA64047268 FOREIGN KEY (temas_id) REFERENCES temas (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFAF01D3B25');
        $this->addSql('ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFA64047268');
        $this->addSql('DROP TABLE posts');
        $this->addSql('DROP TABLE temas');
    }
}
