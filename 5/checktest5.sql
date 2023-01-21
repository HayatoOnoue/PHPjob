DROP DATABASE IF EXISTS checktest5;

CREATE DATABASE checktest5 CHARACTER SET utf8;
USE checktest5;

CREATE TABLE books (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(50),
    date DATE,
    stock INT,
    PRIMARY KEY (id)
) DEFAULT CHARSET=utf8;

CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50),
    password VARCHAR(255),
    PRIMARY KEY (id)
) DEFAULT CHARSET=utf8;


-- -- 初期データの挿入
-- INSERT INTO users (first_name, last_name, last_login) VALUES ('翔伍', '隼田', now());

-- INSERT INTO `posts` (`title`, `category_no`, `comment`, `created`)
--     VALUES
--         ('近場の居酒屋について', 1, '庄屋は案外良い店だという件について', NOW()),
--         ('大洗に行ってきた', 2, '大洗はいいぞ', NOW()),
--         ('最近読んだ本', 3, 'オブジェクト指向設計', NOW()),
--         ('オフィス近場の安いランチ', 1, '天狗酒場', NOW()),
--         ('静岡の良さ', 2, '富士山', NOW());