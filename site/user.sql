CREATE DATABASE IF NOT EXISTS users;

USE users;

CREATE TABLE if NOT EXISTS users(
`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`username` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
`password_1` varchar(100) NOT NULL,
`password_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
