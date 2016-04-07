DROP DATABASE IF EXISTS tutorial;

CREATE DATABASE tutorial;

USE tutorial;

CREATE TABLE user (
    id          INTEGER(10) UNSIGNED            AUTO_INCREMENT,
    email       VARCHAR(100),
    password    CHAR(60),
    remember_token CHAR(100),
    PRIMARY KEY (id)
);

CREATE TABLE bookmark (
	id			INTEGER(10) UNSIGNED			AUTO_INCREMENT,
	text		VARCHAR(100),
	url			VARCHAR(100),
	PRIMARY KEY (id)
);

CREATE TABLE tag (
	id			INTEGER(10) UNSIGNED			AUTO_INCREMENT,
	tag			VARCHAR(50),
	PRIMARY KEY (id)
);

CREATE TABLE bookmark_tag (
	bookmark_id			INTEGER(10) UNSIGNED,
	tag_id				INTEGER(10) UNSIGNED,
	FOREIGN KEY (bookmark_id) REFERENCES bookmark(id) ON DELETE CASCADE,
	FOREIGN KEY (tag_id) REFERENCES tag(id) ON DELETE CASCADE,
	PRIMARY KEY (bookmark_id, tag_id)
);


##############################################################

INSERT INTO user VALUES (1, "admin@tutorial.com", "$2y$10$PixRpjRxh.kb1rPJnyYuje9E8329MWUSxFYkZVwIkz4RH0wPSTvRW", "");

INSERT INTO bookmark VALUES (1, "laravel docs", "http://laravel.com/docs/5.2");
INSERT INTO bookmark VALUES (2, "mean stack", "http://mean.io");

INSERT INTO tag VALUES (1, "php");
INSERT INTO tag VALUES (2, "mvc");
INSERT INTO tag VALUES (3, "cse324");
INSERT INTO tag VALUES (4, "nodejs");

INSERT INTO bookmark_tag VALUES(1, 1);
INSERT INTO bookmark_tag VALUES(1, 2);
INSERT INTO bookmark_tag VALUES(1, 3);
INSERT INTO bookmark_tag VALUES(2, 4);
INSERT INTO bookmark_tag VALUES(2, 2);
INSERT INTO bookmark_tag VALUES(2, 3);
