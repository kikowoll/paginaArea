<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210807132736 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE grupos (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(100) NOT NULL, direccion VARCHAR(150) DEFAULT NULL, local VARCHAR(100) DEFAULT NULL, zona VARCHAR(100) DEFAULT NULL, codpos VARCHAR(10) DEFAULT NULL, ciudad VARCHAR(100) DEFAULT NULL, sitios VARCHAR(100) DEFAULT NULL, cerradas VARCHAR(255) DEFAULT NULL, abiertas VARCHAR(255) DEFAULT NULL, online VARCHAR(255) DEFAULT NULL, otros VARCHAR(255) DEFAULT NULL, lm VARCHAR(13) DEFAULT NULL, mm VARCHAR(13) DEFAULT NULL, xm VARCHAR(13) DEFAULT NULL, jm VARCHAR(13) DEFAULT NULL, vm VARCHAR(13) DEFAULT NULL, sm VARCHAR(13) DEFAULT NULL, dm VARCHAR(13) DEFAULT NULL, lt VARCHAR(13) DEFAULT NULL, mt VARCHAR(13) DEFAULT NULL, xt VARCHAR(13) DEFAULT NULL, jt VARCHAR(13) DEFAULT NULL, vt VARCHAR(13) DEFAULT NULL, st VARCHAR(13) DEFAULT NULL, dt VARCHAR(13) DEFAULT NULL, lo VARCHAR(13) DEFAULT NULL, mo VARCHAR(13) DEFAULT NULL, xo VARCHAR(13) DEFAULT NULL, jo VARCHAR(13) DEFAULT NULL, vo VARCHAR(13) DEFAULT NULL, so VARCHAR(13) DEFAULT NULL, do VARCHAR(13) DEFAULT NULL, link VARCHAR(255) DEFAULT NULL, servidor1 VARCHAR(100) DEFAULT NULL, servidor2 VARCHAR(100) DEFAULT NULL, servidor3 VARCHAR(100) DEFAULT NULL, lat VARCHAR(100) DEFAULT NULL, lng VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE grupos');
    }
}
