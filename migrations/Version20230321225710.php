<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230321225710 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE boey ADD transaction_type INT NOT NULL, ADD invoice_no VARCHAR(255) DEFAULT NULL, ADD payment_type INT DEFAULT NULL, ADD table_number VARCHAR(255) DEFAULT NULL, ADD sales_person VARCHAR(255) DEFAULT NULL, ADD hold_memo VARCHAR(255) DEFAULT NULL, ADD date DATE DEFAULT NULL, ADD customer_name VARCHAR(255) DEFAULT NULL, ADD customer_tin VARCHAR(255) DEFAULT NULL, ADD customer_vat VARCHAR(255) DEFAULT NULL, ADD cashier_updated VARCHAR(255) DEFAULT NULL, ADD posid VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE boey DROP transaction_type, DROP invoice_no, DROP payment_type, DROP table_number, DROP sales_person, DROP hold_memo, DROP date, DROP customer_name, DROP customer_tin, DROP customer_vat, DROP cashier_updated, DROP posid');
    }
}
