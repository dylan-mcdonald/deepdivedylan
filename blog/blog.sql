DROP TABLE IF EXISTS tagged_post;
DROP TABLE IF EXISTS tag;
DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS author;
DROP TABLE IF EXISTS user;

CREATE TABLE user
(
\tid INT UNSIGNED AUTO_INCREMENT NOT NULL,
\temail VARCHAR(128) NOT NULL,
\tpassword CHAR(128) NOT NULL,
\tsalt CHAR(64) NOT NULL,
\tverifcation CHAR(32),
\tadmin TINYINT(1) UNSIGNED NOT NULL,
\tUNIQUE(email),
\tPRIMARY KEY(id)
);

CREATE TABLE author
(
\tid INT UNSIGNED AUTO_INCREMENT NOT NULL,
\tuser_id INT UNSIGNED NOT NULL,
\tname VARCHAR(128) NOT NULL,
\tbyline VARCHAR(128) NOT NULL,
\tUNIQUE(user_id),
\tPRIMARY KEY(id),
\tFOREIGN KEY(user_id) REFERENCES user(id)
);

CREATE TABLE post
(
\tid INT UNSIGNED AUTO_INCREMENT NOT NULL,
\tauthor_id INT UNSIGNED NOT NULL,
\tcreate_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
\tupdate_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
\ttitle VARCHAR(128) NOT NULL,
\tmain_text TEXT,
\tINDEX(author_id),
\tINDEX(title),
\tFOREIGN KEY(author_id) REFERENCES author(id)
);

CREATE TABLE tag
(
\tid INT UNSIGNED AUTO_INCREMENT NOT NULL,
\tname VARCHAR(64) NOT NULL,
\tINDEX(name)
);

CREATE TABLE tagged_post
(
\tpost_id INT UNSIGNED NOT NULL,
\ttag_id INT UNSIGNED NOT NULL,
\tINDEX(post_id),
\tINDEX(tag_id),
\tPRIMARY KEY(post_id, tag_id),
\tFOREIGN KEY(post_id) REFERENCES post(id),
\tFOREIGN KEY(tag_id) REFERENCES tag(id)
);