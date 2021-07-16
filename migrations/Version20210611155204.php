<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210611155204 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coupe_echelle ADD prix INT NOT NULL');
        $this->addSql('ALTER TABLE coupe_echelle_echelle DROP FOREIGN KEY FK_6D9623673E9E5E10');
        $this->addSql('ALTER TABLE coupe_echelle_echelle DROP FOREIGN KEY FK_6D9623677DD6B4B5');
        $this->addSql('ALTER TABLE coupe_echelle_echelle ADD CONSTRAINT FK_6D9623673E9E5E10 FOREIGN KEY (echelle_id_id) REFERENCES echelle (id)');
        $this->addSql('ALTER TABLE coupe_echelle_echelle ADD CONSTRAINT FK_6D9623677DD6B4B5 FOREIGN KEY (coupe_echelle_id_id) REFERENCES coupe_echelle (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coupe_echelle DROP prix');
        $this->addSql('ALTER TABLE coupe_echelle_echelle DROP FOREIGN KEY FK_6D9623677DD6B4B5');
        $this->addSql('ALTER TABLE coupe_echelle_echelle DROP FOREIGN KEY FK_6D9623673E9E5E10');
        $this->addSql('ALTER TABLE coupe_echelle_echelle ADD CONSTRAINT FK_6D9623677DD6B4B5 FOREIGN KEY (coupe_echelle_id_id) REFERENCES coupe_echelle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE coupe_echelle_echelle ADD CONSTRAINT FK_6D9623673E9E5E10 FOREIGN KEY (echelle_id_id) REFERENCES echelle (id) ON DELETE CASCADE');
    }
}
