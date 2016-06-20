## source /path/of/base_student.sql

CREATE TABLE ft_table (id INT PRIMARY KEY AUTO_INCREMENT, login VARCHAR(8), group ENUM('staff', 'student', 'other'), date_de_creation DATE);
