CREATE DATABASE monsterhr;

CREATE TABLE monsterhr.monsterhr_posts(
	id 				INTEGER AUTO_INCREMENT PRIMARY KEY,
    title 			VARCHAR(256) 	NOT NULL,
    preview_contet 	VARCHAR(512) 	NOT NULL,
    content 		TEXT 		 	NOT NULL
);

CREATE TABLE monsterhr.monsterhr_groups(
	id 			INTEGER AUTO_INCREMENT PRIMARY KEY,
    title 		VARCHAR(256) NOT NULL,
    priority 	INTEGER DEFAULT 0
);

CREATE TABLE monsterhr.monsterhr_group_post(
	post_id INTEGER,
    group_id INTEGER
);

CREATE TABLE monsterhr.monsterhr_users(
	id 			INTEGER AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(256) NOT NULL,
    email    VARCHAR(256) NOT NULL,
    password VARCHAR(256) NOT NULL,
    role	 tinyint DEFAULT 0
);



