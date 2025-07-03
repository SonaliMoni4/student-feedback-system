CREATE DATABASE IF NOT EXISTS feedback_system;
USE feedback_system;

CREATE TABLE IF NOT EXISTS feedback (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  usn VARCHAR(20),
  sem INT,
  subject VARCHAR(100),
  rating INT,
  feedback TEXT
);
