<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210414141927 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE type_user (id INT AUTO_INCREMENT NOT NULL, libelle_type_user VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD type_user_id INT NOT NULL, ADD telephone VARCHAR(10) DEFAULT NULL, ADD adresse VARCHAR(255) NOT NULL, ADD entreprise VARCHAR(255) DEFAULT NULL, ADD code_postal VARCHAR(6) NOT NULL, ADD pays VARCHAR(255) NOT NULL, ADD many_to_one VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(180) DEFAULT NULL, CHANGE password password VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498F4FBC60 FOREIGN KEY (type_user_id) REFERENCES type_user (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6498F4FBC60 ON user (type_user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498F4FBC60');
        $this->addSql('DROP TABLE type_user');
        $this->addSql('DROP INDEX IDX_8D93D6498F4FBC60 ON user');
        $this->addSql('ALTER TABLE user DROP type_user_id, DROP telephone, DROP adresse, DROP entreprise, DROP code_postal, DROP pays, DROP many_to_one, CHANGE email email VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
