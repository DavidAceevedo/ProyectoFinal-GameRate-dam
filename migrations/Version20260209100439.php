<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260209100439 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE videojuego_plataforma (videojuego_id INT NOT NULL, plataforma_id INT NOT NULL, INDEX IDX_DDDABEE82925A85 (videojuego_id), INDEX IDX_DDDABEEEB90E430 (plataforma_id), PRIMARY KEY (videojuego_id, plataforma_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE videojuego_plataforma ADD CONSTRAINT FK_DDDABEE82925A85 FOREIGN KEY (videojuego_id) REFERENCES videojuego (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE videojuego_plataforma ADD CONSTRAINT FK_DDDABEEEB90E430 FOREIGN KEY (plataforma_id) REFERENCES plataforma (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE plataforma CHANGE name nombre VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE videojuego ADD categoria_id INT DEFAULT NULL, DROP genero');
        $this->addSql('ALTER TABLE videojuego ADD CONSTRAINT FK_AA5E6DFA3397707A FOREIGN KEY (categoria_id) REFERENCES categoria (id)');
        $this->addSql('CREATE INDEX IDX_AA5E6DFA3397707A ON videojuego (categoria_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE videojuego_plataforma DROP FOREIGN KEY FK_DDDABEE82925A85');
        $this->addSql('ALTER TABLE videojuego_plataforma DROP FOREIGN KEY FK_DDDABEEEB90E430');
        $this->addSql('DROP TABLE videojuego_plataforma');
        $this->addSql('ALTER TABLE plataforma CHANGE nombre name VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE videojuego DROP FOREIGN KEY FK_AA5E6DFA3397707A');
        $this->addSql('DROP INDEX IDX_AA5E6DFA3397707A ON videojuego');
        $this->addSql('ALTER TABLE videojuego ADD genero VARCHAR(100) DEFAULT NULL, DROP categoria_id');
    }
}
