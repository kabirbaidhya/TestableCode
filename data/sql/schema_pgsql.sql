--
-- Sample Database in Postgre SQL for unit testing demo
--

DROP TABLE IF EXISTS users CASCADE;
DROP SEQUENCE IF EXISTS users_seq CASCADE;

CREATE SEQUENCE users_seq;
CREATE TABLE users (
  id integer PRIMARY KEY default nextval('users_seq'::regclass) NOT NULL,
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

--
-- Session Table
DROP TABLE IF EXISTS sessions CASCADE;
DROP SEQUENCE IF EXISTS sessions_seq CASCADE;

CREATE SEQUENCE sessions_seq;
CREATE TABLE sessions (
    id integer PRIMARY KEY DEFAULT nextval('sessions_seq'::regclass) NOT NULL,
    name character varying(30) NOT NULL,
    value character varying(30) NOT NULL
);

INSERT INTO sessions (id, name, value)
VALUES
(1, 'user_id', '1');
