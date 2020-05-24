<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200524223401 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE invoice_item CHANGE price_netto price_netto NUMERIC(10, 2) NOT NULL, CHANGE price_brutto price_brutto NUMERIC(10, 2) NOT NULL');
        $this->addSql('ALTER TABLE invoice CHANGE netto_sum netto_sum NUMERIC(10, 2) DEFAULT NULL, CHANGE vat_sum vat_sum NUMERIC(10, 2) DEFAULT NULL, CHANGE brutto_sum brutto_sum NUMERIC(10, 2) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE invoice CHANGE netto_sum netto_sum NUMERIC(10, 0) DEFAULT NULL, CHANGE vat_sum vat_sum NUMERIC(10, 0) DEFAULT NULL, CHANGE brutto_sum brutto_sum NUMERIC(10, 0) DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice_item CHANGE price_netto price_netto NUMERIC(10, 0) NOT NULL, CHANGE price_brutto price_brutto NUMERIC(10, 0) NOT NULL');
    }
}
