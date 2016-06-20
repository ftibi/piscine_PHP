## source /path/of/base_student.sql
CREATE TABLE ft_table ('id' INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 'login' VARCHAR(8) NOT NULL DEFAULT 'toto', 'group' ENUM('staff', 'student', 'other') NOT NULL, 'date_de_creation' DATE NOT NULL);
