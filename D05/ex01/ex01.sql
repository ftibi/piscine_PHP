CREATE TABLE ft_table (
	id INT AUTO_INCREMENT PRIMARY KEY,
	login VARCHAR(8) DEFAULT 'toto' NOT NULL,
	groupe ENUM('staff', 'student', 'other') NOT NULL,
	date_de_creation DATE NOT NULL
);
