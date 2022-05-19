<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220517081740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE digital_knowledge (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, knowledge VARCHAR(255) NOT NULL, year VARCHAR(255) NOT NULL, sextontjugofyra VARCHAR(255) NOT NULL, fjugofemtrettiofyra VARCHAR(255) NOT NULL, trettiofemfyrtiofyra VARCHAR(255) NOT NULL, fyrtiofemfemtiofyra VARCHAR(255) NOT NULL, femtiofemsextiofyra VARCHAR(255) NOT NULL, sextiofemsjutiofyra VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE mobbning1 (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year VARCHAR(255) NOT NULL, flickor VARCHAR(255) DEFAULT NULL, pojkar VARCHAR(255) DEFAULT NULL, totalt VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE mobbning2 (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year VARCHAR(255) NOT NULL, flickor VARCHAR(255) DEFAULT NULL, pojkar VARCHAR(255) DEFAULT NULL, totalt VARCHAR(255) DEFAULT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE digital_knowledge');
        $this->addSql('DROP TABLE mobbning1');
        $this->addSql('DROP TABLE mobbning2');
    }
}
