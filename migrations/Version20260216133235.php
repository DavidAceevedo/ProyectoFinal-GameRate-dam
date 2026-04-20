<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260216133235 extends AbstractMigration
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
        $this->addSql('CREATE TABLE opinion (id INT AUTO_INCREMENT NOT NULL, nota INT NOT NULL, comentario LONGTEXT NOT NULL, videojuego_id INT NOT NULL, autor_id INT NOT NULL, INDEX IDX_AB02B02782925A85 (videojuego_id), INDEX IDX_AB02B02714D45BBE (autor_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE plataforma (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(100) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE videojuego (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(255) NOT NULL, descripcion LONGTEXT DEFAULT NULL, imagen VARCHAR(500) DEFAULT NULL, categoria_id INT DEFAULT NULL, INDEX IDX_AA5E6DFA3397707A (categoria_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');        $this->addSql('CREATE TABLE videojuego_plataforma (videojuego_id INT NOT NULL, plataforma_id INT NOT NULL, INDEX IDX_DDDABEE82925A85 (videojuego_id), INDEX IDX_DDDABEEEB90E430 (plataforma_id), PRIMARY KEY (videojuego_id, plataforma_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE lista_deseos ADD CONSTRAINT FK_DAB13E44DB38439E FOREIGN KEY (usuario_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE lista_deseos ADD CONSTRAINT FK_DAB13E4482925A85 FOREIGN KEY (videojuego_id) REFERENCES videojuego (id)');
        $this->addSql('ALTER TABLE opinion ADD CONSTRAINT FK_AB02B02782925A85 FOREIGN KEY (videojuego_id) REFERENCES videojuego (id)');
        $this->addSql('ALTER TABLE opinion ADD CONSTRAINT FK_AB02B02714D45BBE FOREIGN KEY (autor_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE videojuego ADD CONSTRAINT FK_AA5E6DFA3397707A FOREIGN KEY (categoria_id) REFERENCES categoria (id)');
        $this->addSql('ALTER TABLE videojuego_plataforma ADD CONSTRAINT FK_DDDABEE82925A85 FOREIGN KEY (videojuego_id) REFERENCES videojuego (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE videojuego_plataforma ADD CONSTRAINT FK_DDDABEEEB90E430 FOREIGN KEY (plataforma_id) REFERENCES plataforma (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lista_deseos DROP FOREIGN KEY FK_DAB13E44DB38439E');
        $this->addSql('ALTER TABLE lista_deseos DROP FOREIGN KEY FK_DAB13E4482925A85');
        $this->addSql('ALTER TABLE opinion DROP FOREIGN KEY FK_AB02B02782925A85');
        $this->addSql('ALTER TABLE opinion DROP FOREIGN KEY FK_AB02B02714D45BBE');
        $this->addSql('ALTER TABLE videojuego DROP FOREIGN KEY FK_AA5E6DFA3397707A');
        $this->addSql('ALTER TABLE videojuego_plataforma DROP FOREIGN KEY FK_DDDABEE82925A85');
        $this->addSql('ALTER TABLE videojuego_plataforma DROP FOREIGN KEY FK_DDDABEEEB90E430');
        $this->addSql('DROP TABLE categoria');
        $this->addSql('DROP TABLE lista_deseos');
        $this->addSql('DROP TABLE opinion');
        $this->addSql('DROP TABLE plataforma');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE videojuego');
        $this->addSql('DROP TABLE videojuego_plataforma');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
