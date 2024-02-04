SELECT * FROM "user" u 

DROP TABLE "user" 

CREATE TABLE user(
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	name VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE,
	profile_img VARCHAR(100) NOT NULL,
	--roles: 'user', 'admin' and 'anon' for users that are not logged
	role VARCHAR(100) NOT NULL
);

INSERT INTO user(name,email,password,profile_img,role)
VALUES
("admin","admin@admin.com","123","public/assets/user.png","admin"),
("user","user@user.com","123","public/assets/user.png", "user");