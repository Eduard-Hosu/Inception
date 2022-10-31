USE mysql;
DELETE FROM mysql.user WHERE user='';
CREATE DATABASE IF NOT EXISTS wordpress;
FLUSH PRIVILEGES;
CREATE USER IF NOT EXISTS 'wp_user'@'%' IDENTIFIED BY 'wp_password';
GRANT ALL PRIVILEGES ON wordpress.* TO 'wp_user'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root_password';