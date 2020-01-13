<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200110082648 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE artisan (id INT AUTO_INCREMENT NOT NULL, name_artisan VARCHAR(100) NOT NULL, last_name_artisan VARCHAR(50) NOT NULL, company_artisan VARCHAR(50) NOT NULL, mail_artisan VARCHAR(300) NOT NULL, picture_artisan VARCHAR(500) NOT NULL, speciality VARCHAR(50) NOT NULL, about VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, name_customer VARCHAR(30) NOT NULL, last_name_customer VARCHAR(50) NOT NULL, pseudo VARCHAR(50) NOT NULL, gender VARCHAR(10) NOT NULL, mail_customer VARCHAR(100) NOT NULL, password_customer VARCHAR(200) NOT NULL, birth_date_customer DATETIME NOT NULL, address VARCHAR(100) NOT NULL, city VARCHAR(100) NOT NULL, zip_code INT NOT NULL, phone_number INT NOT NULL, creation_date_customer DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, artisan_id INT NOT NULL, customer_id INT NOT NULL, name_product VARCHAR(100) NOT NULL, reference_product VARCHAR(50) NOT NULL, price INT NOT NULL, picture_one VARCHAR(500) NOT NULL, picture_two VARCHAR(500) DEFAULT NULL, picture_three VARCHAR(500) DEFAULT NULL, materials VARCHAR(50) NOT NULL, stock INT NOT NULL, description VARCHAR(300) NOT NULL, artisan_company VARCHAR(100) NOT NULL, artisan_name VARCHAR(100) NOT NULL, artisan_picture VARCHAR(500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE artisan');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE product');
    }
}
