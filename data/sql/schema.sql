--
-- Sample Database in Postgre SQL for unit testing demo
--

DROP TABLE IF EXISTS users CASCADE;

CREATE SEQUENCE users_seq;
CREATE TABLE users (
  id integer PRIMARY KEY default nextval('users_seq') NOT NULL,
  name varchar(30) NOT NULL
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
