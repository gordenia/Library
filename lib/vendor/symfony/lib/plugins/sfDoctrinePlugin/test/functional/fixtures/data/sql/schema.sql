CREATE TABLE doctrine__record__abstract (id INTEGER PRIMARY KEY AUTOINCREMENT);
CREATE TABLE profile (id INTEGER PRIMARY KEY AUTOINCREMENT, user_id INTEGER, first_name VARCHAR(255), last_name VARCHAR(255));
CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT, username VARCHAR(255), password VARCHAR(255));
CREATE TABLE article (id INTEGER PRIMARY KEY AUTOINCREMENT, author_id INTEGER, is_on_homepage INTEGER, created_at DATETIME, updated_at DATETIME);
CREATE TABLE author (id INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR(255));
CREATE TABLE subscription (id INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR(255), status VARCHAR(255));
