# Create Databases
CREATE DATABASE IF NOT EXISTS `laravel_db`;
CREATE DATABASE IF NOT EXISTS `laravel_db_test`;

# Create user and grant rights
FLUSH PRIVILEGES;
CREATE USER 'laravel'@'%' IDENTIFIED BY 'secret';
GRANT ALL ON laravel_db.* TO 'laravel'@'%';

CREATE USER 'laravel_test'@'%' IDENTIFIED BY 'secret';
GRANT ALL ON laravel_db_test.* TO 'laravel_test'@'%';
