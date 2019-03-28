<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190328152550 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE activities (id INT AUTO_INCREMENT NOT NULL, sport_id INT NOT NULL, activitiestype_id INT NOT NULL, distance INT NOT NULL, duration DATETIME NOT NULL, place VARCHAR(255) NOT NULL, partner VARCHAR(255) NOT NULL, average_pace INT NOT NULL, average_speed DOUBLE PRECISION NOT NULL, heart_rate INT DEFAULT NULL, UNIQUE INDEX UNIQ_B5F1AFE5AC78BCF8 (sport_id), UNIQUE INDEX UNIQ_B5F1AFE52366615D (activitiestype_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activitiestype (id INT AUTO_INCREMENT NOT NULL, activitiestype VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sports (id INT AUTO_INCREMENT NOT NULL, sportname VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activities ADD CONSTRAINT FK_B5F1AFE5AC78BCF8 FOREIGN KEY (sport_id) REFERENCES sports (id)');
        $this->addSql('ALTER TABLE activities ADD CONSTRAINT FK_B5F1AFE52366615D FOREIGN KEY (activitiestype_id) REFERENCES activitiestype (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activities DROP FOREIGN KEY FK_B5F1AFE52366615D');
        $this->addSql('ALTER TABLE activities DROP FOREIGN KEY FK_B5F1AFE5AC78BCF8');
        $this->addSql('DROP TABLE activities');
        $this->addSql('DROP TABLE activitiestype');
        $this->addSql('DROP TABLE sports');
    }
}
