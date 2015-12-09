--
-- Sample Database in MySql for unit testing demo
--

DROP TABLE IF EXISTS users CASCADE;

CREATE TABLE users (
     id INT NOT NULL AUTO_INCREMENT,
     name VARCHAR (30) NOT NULL,
     PRIMARY KEY (id)
);
--
-- Insert few dummy records into the users table
INSERT INTO users (id, name)
VALUES
(1, 'Person 1'),
(2, 'Person 1'),
(3, 'Person 1'),
(4, 'Person 1'),
(5, 'Foo Bar');

--
-- Session Table
DROP TABLE IF EXISTS sessions CASCADE;

CREATE TABLE sessions (
     id INT NOT NULL AUTO_INCREMENT,
     name VARCHAR (30) NOT NULL,
     value VARCHAR (30) NOT NULL,
     PRIMARY KEY (id)
);

INSERT INTO sessions (id, name, value)
VALUES
(1, 'user_id', '1');
