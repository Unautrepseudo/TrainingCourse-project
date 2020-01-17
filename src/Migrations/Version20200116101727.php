<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200116101727 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE artisan (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(50) NOT NULL, company VARCHAR(50) NOT NULL, email VARCHAR(300) NOT NULL, picture VARCHAR(500) NOT NULL, speciality VARCHAR(50) NOT NULL, about VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_3C600AD3A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(30) NOT NULL, last_name VARCHAR(50) NOT NULL, pseudo VARCHAR(50) NOT NULL, gender VARCHAR(10) NOT NULL, email VARCHAR(100) NOT NULL, birthday DATETIME NOT NULL, created_at DATETIME NOT NULL, address VARCHAR(100) NOT NULL, city VARCHAR(100) NOT NULL, zip_code INT NOT NULL, phone_number INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, artisan_id INT DEFAULT NULL, customer_id INT DEFAULT NULL, name VARCHAR(100) NOT NULL, reference VARCHAR(50) NOT NULL, price INT NOT NULL, picture_one VARCHAR(500) NOT NULL, picture_two VARCHAR(500) DEFAULT NULL, picture_three VARCHAR(500) DEFAULT NULL, materials VARCHAR(50) NOT NULL, stock INT NOT NULL, description VARCHAR(300) NOT NULL, artisan_company VARCHAR(100) NOT NULL, artisan_name VARCHAR(100) NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_D34A04AD5ED3C7B7 (artisan_id), INDEX IDX_D34A04AD9395C3F3 (customer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fos_user (id INT AUTO_INCREMENT NOT NULL, artisan_id INT DEFAULT NULL, username VARCHAR(180) NOT NULL, username_canonical VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, email_canonical VARCHAR(180) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, confirmation_token VARCHAR(180) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', last_name VARCHAR(100) NOT NULL, birthday DATETIME NOT NULL, address VARCHAR(100) NOT NULL, city VARCHAR(100) NOT NULL, zip_code VARCHAR(100) NOT NULL, phone_number VARCHAR(100) NOT NULL, role_user VARCHAR(100) DEFAULT NULL, company VARCHAR(50) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, speciality VARCHAR(50) DEFAULT NULL, about VARCHAR(100) DEFAULT NULL, UNIQUE INDEX UNIQ_957A647992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_957A6479A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_957A6479C05FB297 (confirmation_token), UNIQUE INDEX UNIQ_957A64795ED3C7B7 (artisan_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE artisan ADD CONSTRAINT FK_3C600AD3A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD5ED3C7B7 FOREIGN KEY (artisan_id) REFERENCES artisan (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD9395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id)');
        $this->addSql('ALTER TABLE fos_user ADD CONSTRAINT FK_957A64795ED3C7B7 FOREIGN KEY (artisan_id) REFERENCES artisan (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD5ED3C7B7');
        $this->addSql('ALTER TABLE fos_user DROP FOREIGN KEY FK_957A64795ED3C7B7');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD9395C3F3');
        $this->addSql('ALTER TABLE artisan DROP FOREIGN KEY FK_3C600AD3A76ED395');
        $this->addSql('DROP TABLE artisan');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE fos_user');
    }
}
