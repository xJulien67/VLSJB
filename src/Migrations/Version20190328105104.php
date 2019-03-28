<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190328105104 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activities ADD activitiestype_id INT NOT NULL, ADD distance INT NOT NULL, ADD duration DATETIME NOT NULL, ADD place VARCHAR(255) NOT NULL, ADD partner VARCHAR(255) NOT NULL, ADD average_pace INT NOT NULL, ADD average_speed DOUBLE PRECISION NOT NULL, ADD heart_rate INT DEFAULT NULL');
        $this->addSql('ALTER TABLE activities ADD CONSTRAINT FK_B5F1AFE52366615D FOREIGN KEY (activitiestype_id) REFERENCES activitiestypes (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B5F1AFE52366615D ON activities (activitiestype_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activities DROP FOREIGN KEY FK_B5F1AFE52366615D');
        $this->addSql('DROP INDEX UNIQ_B5F1AFE52366615D ON activities');
        $this->addSql('ALTER TABLE activities DROP activitiestype_id, DROP distance, DROP duration, DROP place, DROP partner, DROP average_pace, DROP average_speed, DROP heart_rate');
    }
}
