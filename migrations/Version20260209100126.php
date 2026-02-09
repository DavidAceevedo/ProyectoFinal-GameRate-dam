<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260209100126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categoria (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE lista_deseos (id INT AUTO_INCREMENT NOT NULL, fecha_agregado DATETIME NOT NULL, usuario_id INT NOT NULL, videojuego_id INT NOT NULL, INDEX IDX_DAB13E44DB38439E (usuario_id), INDEX IDX_DAB13E4482925A85 (videojuego_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE plataforma (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE lista_deseos ADD CONSTRAINT FK_DAB13E44DB38439E FOREIGN KEY (usuario_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE lista_deseos ADD CONSTRAINT FK_DAB13E4482925A85 FOREIGN KEY (videojuego_id) REFERENCES videojuego (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lista_deseos DROP FOREIGN KEY FK_DAB13E44DB38439E');
        $this->addSql('ALTER TABLE lista_deseos DROP FOREIGN KEY FK_DAB13E4482925A85');
        $this->addSql('DROP TABLE categoria');
        $this->addSql('DROP TABLE lista_deseos');
        $this->addSql('DROP TABLE plataforma');
    }
}
