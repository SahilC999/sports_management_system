CREATE DATABASE IF NOT EXISTS sports_db;
USE sports_db;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(50),
  role ENUM('admin', 'coach')
);

INSERT INTO users (username, password, role) VALUES
('admin', 'admin123', 'admin'),
('coach', 'coach123', 'coach');
