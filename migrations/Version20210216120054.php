<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210216120054 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accessoire (id INT AUTO_INCREMENT NOT NULL, nom_accessoire VARCHAR(50) NOT NULL, ref_accessoire VARCHAR(50) NOT NULL, prix_accessoire DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE changement_volee (id INT AUTO_INCREMENT NOT NULL, mesure_changement INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE config (id INT AUTO_INCREMENT NOT NULL, nom_config VARCHAR(50) NOT NULL, reference_config VARCHAR(255) NOT NULL, description_config VARCHAR(255) NOT NULL, remise_config INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE echelle (id INT AUTO_INCREMENT NOT NULL, echelle_sortie_id INT DEFAULT NULL, echelle_entree_id INT DEFAULT NULL, echelle_hauteur_id INT DEFAULT NULL, echelle_type_echelle_id INT DEFAULT NULL, echelle_norme_id INT DEFAULT NULL, echelle_config_id INT DEFAULT NULL, INDEX IDX_DA65794D712551BC (echelle_type_echelle_id), INDEX IDX_DA65794D52EAF347 (echelle_hauteur_id), INDEX IDX_DA65794D21127304 (echelle_sortie_id), INDEX IDX_DA65794DB7242249 (echelle_norme_id), INDEX IDX_DA65794DC9BBACD4 (echelle_config_id), INDEX IDX_DA65794D421B7347 (echelle_entree_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE echelle_changement_volee (echelle_id INT NOT NULL, changement_volee_id INT NOT NULL, INDEX IDX_69E28AE2DD268C11 (echelle_id), INDEX IDX_69E28AE2DB91C02D (changement_volee_id), PRIMARY KEY(echelle_id, changement_volee_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE echelle_fixation (echelle_id INT NOT NULL, fixation_id INT NOT NULL, INDEX IDX_1DB625E1DD268C11 (echelle_id), INDEX IDX_1DB625E1C769D5E1 (fixation_id), PRIMARY KEY(echelle_id, fixation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE echelle_palier (echelle_id INT NOT NULL, palier_id INT NOT NULL, INDEX IDX_663CCB8ADD268C11 (echelle_id), INDEX IDX_663CCB8A60E28355 (palier_id), PRIMARY KEY(echelle_id, palier_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE echelle_accessoire (id INT AUTO_INCREMENT NOT NULL, echelle_id INT NOT NULL, accessoire_id INT NOT NULL, qte INT NOT NULL, INDEX IDX_FD1FA697DD268C11 (echelle_id), INDEX IDX_FD1FA697D23B67ED (accessoire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE element (id INT AUTO_INCREMENT NOT NULL, description_element VARCHAR(255) NOT NULL, valeur_element INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE element_norme (element_id INT NOT NULL, norme_id INT NOT NULL, INDEX IDX_FDB991FE1F1F2A24 (element_id), INDEX IDX_FDB991FE6F0D55C9 (norme_id), PRIMARY KEY(element_id, norme_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entree (id INT AUTO_INCREMENT NOT NULL, reference_entree VARCHAR(50) NOT NULL, prix_entree INT NOT NULL, libelle_entree VARCHAR(255) NOT NULL, description_entree VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fixation (id INT AUTO_INCREMENT NOT NULL, depart_fixation INT NOT NULL, hauteur_relative_fixation INT NOT NULL, hauteur_absolue_fixation INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hauteur (id INT AUTO_INCREMENT NOT NULL, afranchir_hauteur INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE norme (id INT AUTO_INCREMENT NOT NULL, description_norme VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE palier (id INT AUTO_INCREMENT NOT NULL, position_palier VARCHAR(255) NOT NULL, hauteur_palier INT NOT NULL, profondeur_palier INT NOT NULL, longueur_palier INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, nom_role VARCHAR(38) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sortie (id INT AUTO_INCREMENT NOT NULL, reference_sortie VARCHAR(50) NOT NULL, prix_sortie INT NOT NULL, libelle_sortie VARCHAR(255) NOT NULL, description_entree VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_echelle (id INT AUTO_INCREMENT NOT NULL, libelle_type_echelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE echelle ADD CONSTRAINT FK_DA65794D21127304 FOREIGN KEY (echelle_sortie_id) REFERENCES sortie (id)');
        $this->addSql('ALTER TABLE echelle ADD CONSTRAINT FK_DA65794D421B7347 FOREIGN KEY (echelle_entree_id) REFERENCES entree (id)');
        $this->addSql('ALTER TABLE echelle ADD CONSTRAINT FK_DA65794D52EAF347 FOREIGN KEY (echelle_hauteur_id) REFERENCES hauteur (id)');
        $this->addSql('ALTER TABLE echelle ADD CONSTRAINT FK_DA65794D712551BC FOREIGN KEY (echelle_type_echelle_id) REFERENCES type_echelle (id)');
        $this->addSql('ALTER TABLE echelle ADD CONSTRAINT FK_DA65794DB7242249 FOREIGN KEY (echelle_norme_id) REFERENCES norme (id)');
        $this->addSql('ALTER TABLE echelle ADD CONSTRAINT FK_DA65794DC9BBACD4 FOREIGN KEY (echelle_config_id) REFERENCES config (id)');
        $this->addSql('ALTER TABLE echelle_changement_volee ADD CONSTRAINT FK_69E28AE2DD268C11 FOREIGN KEY (echelle_id) REFERENCES echelle (id)');
        $this->addSql('ALTER TABLE echelle_changement_volee ADD CONSTRAINT FK_69E28AE2DB91C02D FOREIGN KEY (changement_volee_id) REFERENCES changement_volee (id)');
        $this->addSql('ALTER TABLE echelle_fixation ADD CONSTRAINT FK_1DB625E1DD268C11 FOREIGN KEY (echelle_id) REFERENCES echelle (id)');
        $this->addSql('ALTER TABLE echelle_fixation ADD CONSTRAINT FK_1DB625E1C769D5E1 FOREIGN KEY (fixation_id) REFERENCES fixation (id)');
        $this->addSql('ALTER TABLE echelle_palier ADD CONSTRAINT FK_663CCB8ADD268C11 FOREIGN KEY (echelle_id) REFERENCES echelle (id)');
        $this->addSql('ALTER TABLE echelle_palier ADD CONSTRAINT FK_663CCB8A60E28355 FOREIGN KEY (palier_id) REFERENCES palier (id)');
        $this->addSql('ALTER TABLE echelle_accessoire ADD CONSTRAINT FK_FD1FA697DD268C11 FOREIGN KEY (echelle_id) REFERENCES echelle (id)');
        $this->addSql('ALTER TABLE echelle_accessoire ADD CONSTRAINT FK_FD1FA697D23B67ED FOREIGN KEY (accessoire_id) REFERENCES accessoire (id)');
        $this->addSql('ALTER TABLE element_norme ADD CONSTRAINT FK_FDB991FE1F1F2A24 FOREIGN KEY (element_id) REFERENCES element (id)');
        $this->addSql('ALTER TABLE element_norme ADD CONSTRAINT FK_FDB991FE6F0D55C9 FOREIGN KEY (norme_id) REFERENCES norme (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE echelle_accessoire DROP FOREIGN KEY FK_FD1FA697D23B67ED');
        $this->addSql('ALTER TABLE echelle_changement_volee DROP FOREIGN KEY FK_69E28AE2DB91C02D');
        $this->addSql('ALTER TABLE echelle DROP FOREIGN KEY FK_DA65794DC9BBACD4');
        $this->addSql('ALTER TABLE echelle_changement_volee DROP FOREIGN KEY FK_69E28AE2DD268C11');
        $this->addSql('ALTER TABLE echelle_fixation DROP FOREIGN KEY FK_1DB625E1DD268C11');
        $this->addSql('ALTER TABLE echelle_palier DROP FOREIGN KEY FK_663CCB8ADD268C11');
        $this->addSql('ALTER TABLE echelle_accessoire DROP FOREIGN KEY FK_FD1FA697DD268C11');
        $this->addSql('ALTER TABLE element_norme DROP FOREIGN KEY FK_FDB991FE1F1F2A24');
        $this->addSql('ALTER TABLE echelle DROP FOREIGN KEY FK_DA65794D421B7347');
        $this->addSql('ALTER TABLE echelle_fixation DROP FOREIGN KEY FK_1DB625E1C769D5E1');
        $this->addSql('ALTER TABLE echelle DROP FOREIGN KEY FK_DA65794D52EAF347');
        $this->addSql('ALTER TABLE echelle DROP FOREIGN KEY FK_DA65794DB7242249');
        $this->addSql('ALTER TABLE element_norme DROP FOREIGN KEY FK_FDB991FE6F0D55C9');
        $this->addSql('ALTER TABLE echelle_palier DROP FOREIGN KEY FK_663CCB8A60E28355');
        $this->addSql('ALTER TABLE echelle DROP FOREIGN KEY FK_DA65794D21127304');
        $this->addSql('ALTER TABLE echelle DROP FOREIGN KEY FK_DA65794D712551BC');
        $this->addSql('DROP TABLE accessoire');
        $this->addSql('DROP TABLE changement_volee');
        $this->addSql('DROP TABLE config');
        $this->addSql('DROP TABLE echelle');
        $this->addSql('DROP TABLE echelle_changement_volee');
        $this->addSql('DROP TABLE echelle_fixation');
        $this->addSql('DROP TABLE echelle_palier');
        $this->addSql('DROP TABLE echelle_accessoire');
        $this->addSql('DROP TABLE element');
        $this->addSql('DROP TABLE element_norme');
        $this->addSql('DROP TABLE entree');
        $this->addSql('DROP TABLE fixation');
        $this->addSql('DROP TABLE hauteur');
        $this->addSql('DROP TABLE norme');
        $this->addSql('DROP TABLE palier');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE sortie');
        $this->addSql('DROP TABLE type_echelle');
    }
}
