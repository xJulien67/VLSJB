<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190404160112 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE activity (id INT AUTO_INCREMENT NOT NULL, sport_id INT NOT NULL, activitytype_id INT NOT NULL, date DATE NOT NULL, distance DOUBLE PRECISION NOT NULL, duration TIME NOT NULL, place VARCHAR(255) NOT NULL, partner VARCHAR(255) DEFAULT NULL, average_pace TIME NOT NULL, average_speed DOUBLE PRECISION NOT NULL, heart_rate INT DEFAULT NULL, INDEX IDX_AC74095AAC78BCF8 (sport_id), INDEX IDX_AC74095A6E098B10 (activitytype_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activitytype (id INT AUTO_INCREMENT NOT NULL, activitytype VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sport (id INT AUTO_INCREMENT NOT NULL, sportname VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activity ADD CONSTRAINT FK_AC74095AAC78BCF8 FOREIGN KEY (sport_id) REFERENCES sport (id)');
        $this->addSql('ALTER TABLE activity ADD CONSTRAINT FK_AC74095A6E098B10 FOREIGN KEY (activitytype_id) REFERENCES activitytype (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activity DROP FOREIGN KEY FK_AC74095A6E098B10');
        $this->addSql('ALTER TABLE activity DROP FOREIGN KEY FK_AC74095AAC78BCF8');
        $this->addSql('DROP TABLE activity');
        $this->addSql('DROP TABLE activitytype');
        $this->addSql('DROP TABLE sport');
    }
}
