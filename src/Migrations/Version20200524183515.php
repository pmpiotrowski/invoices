<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200524183515 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE invoice CHANGE invoicing_place invoicing_place VARCHAR(255) DEFAULT NULL, CHANGE sale_date sale_date DATE DEFAULT NULL, CHANGE seller_nip seller_nip VARCHAR(255) DEFAULT NULL, CHANGE seller_postal_code seller_postal_code VARCHAR(255) DEFAULT NULL, CHANGE seller_city seller_city VARCHAR(255) DEFAULT NULL, CHANGE seller_account_bank_number seller_account_bank_number VARCHAR(255) DEFAULT NULL, CHANGE seller_bank seller_bank VARCHAR(255) DEFAULT NULL, CHANGE buyer_street buyer_street VARCHAR(255) DEFAULT NULL, CHANGE buyer_postal_code buyer_postal_code VARCHAR(255) DEFAULT NULL, CHANGE buyer_city buyer_city VARCHAR(255) DEFAULT NULL, CHANGE payment_period payment_period VARCHAR(255) DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT NULL, CHANGE amount_paid amount_paid NUMERIC(10, 0) DEFAULT NULL, CHANGE invoice_issuer invoice_issuer VARCHAR(255) DEFAULT NULL, CHANGE invoice_recipient invoice_recipient VARCHAR(255) DEFAULT NULL, CHANGE netto_sum netto_sum NUMERIC(10, 0) DEFAULT NULL, CHANGE vat_sum vat_sum NUMERIC(10, 0) DEFAULT NULL, CHANGE brutto_sum brutto_sum NUMERIC(10, 0) DEFAULT NULL, CHANGE seller_street seller_street VARCHAR(255) DEFAULT NULL, CHANGE buyer_nip buyer_nip VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE invoice CHANGE invoicing_place invoicing_place VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE sale_date sale_date DATE NOT NULL, CHANGE seller_nip seller_nip VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE seller_street seller_street VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE seller_postal_code seller_postal_code VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE seller_city seller_city VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE seller_account_bank_number seller_account_bank_number VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE seller_bank seller_bank VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE buyer_nip buyer_nip VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE buyer_street buyer_street VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE buyer_postal_code buyer_postal_code VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE buyer_city buyer_city VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE payment_period payment_period VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE status status VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE amount_paid amount_paid NUMERIC(10, 0) NOT NULL, CHANGE invoice_issuer invoice_issuer VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE invoice_recipient invoice_recipient VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE netto_sum netto_sum NUMERIC(10, 0) NOT NULL, CHANGE vat_sum vat_sum NUMERIC(10, 0) NOT NULL, CHANGE brutto_sum brutto_sum NUMERIC(10, 0) NOT NULL');
    }
}
