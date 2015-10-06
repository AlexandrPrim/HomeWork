-- 1. Создать базу данных library.
CREATE DATABASE library;

-- 2. Создать таблицу book. Таблица должна содержать следующие колонки:
-- - id - int, primary key, autoincrement
-- - title - varchar, not null
-- - created_at - datetime, not null
CREATE TABLE book (
`id` int auto_increment primary key,
`title` varchar NOT NULL,
`created_at` datetime NOT NULL,

);

-- 3. Создать таблицу author. Таблица должна содержать следующие колонки:
-- - id - int, primary key, autoincrement
-- - first_name - varchar, not null
-- - last_name - varchar, not null
CREATE TABLE author (
`id` int primary key auto_increment,
`first_name` varchar NOT NULL,
`last_name` varchar NOT NULL
);

-- 4. Создать таблицу book_author. Таблица должна содержать следующие колонки:
-- - id - int, primary key, autoincrement
-- - book_id - int, not null
-- - author_id - int, not null
CREATE TABLE book_author (
`id` int primary key auto_increment,
`book_id` int NOT NULL,
`author_id` int NOT NULL
);

-- 5. Добавить в таблицу book колонку is_published с типом boolean.
-- Значение по-умолчанию - 0. Колонку необходимо разместить перед колонкой created_at.
ALTER TABLE  `book`
ADD `is_published` BOOLEAN NOT NULL DEFAULT FALSE
AFTER `title`;

-- 6. Добавить в таблицу author колонку email, тип varchar, not null.
ALTER TABLE author
ADD `email` varchar(100) NOT NULL;

-- 7. Добавить в таблицу несколько записей (5 и более).
INSERT author (`first_name`, `last_name`)
VALUES ('Joanne', 'Rowling');
INSERT author (`first_name`, `last_name`)
VALUES ('John', 'Tolkien');
INSERT author (`first_name`, `last_name`)
VALUES ('Clive', 'Lewis');
INSERT author (`first_name`, `last_name`)
VALUES ('Anjey', 'Sapkovskiy');
INSERT author (`first_name`, `last_name`)
VALUES ('Glen', 'Cook');
INSERT author (`first_name`, `last_name`)
VALUES ('George', 'Martin');

-- 8. Добавить в таблицу несколько записей (5 и более).
INSERT book (`title`)
VALUES ('Garry Potter');
INSERT book (`title`)
VALUES ('Narnia');
INSERT book (`title`)
VALUES ('The lord of the rings');
INSERT book (`title`)
VALUES ('The Witcher');
INSERT book (`title`)
VALUES ('The game of trones');
INSERT book (`title`)
VALUES ('The Black Company');

-- 9. Добавить в таблицу записи на основании из таблиц book и author.
INSERT book_author (`book_id`, `author_id`)
VALUES ('1', '1');
INSERT book_author (`book_id`, `author_id`)
VALUES ('2', '3');
INSERT book_author (`book_id`, `author_id`)
VALUES ('3', '2');
INSERT book_author (`book_id`, `author_id`)
VALUES ('4', '4');
INSERT book_author (`book_id`, `author_id`)
VALUES ('5', '6');
INSERT book_author (`book_id`, `author_id`)
VALUES ('6', '5');

-- 10. Создать запрос на обновление таблицы book, где нужно установить для колонки
-- is_published значение 1 для тех записей, id которых попадает в диапазон 1, 3, 5.
UPDATE book
SET is_published = 1
WHERE id IN  (1, 3, 5);

-- 11. Создать запрос на обновление таблицы book, где нужно установить текущую
-- дату (функция NOW()) для колонки created_at для записей, у которых is_published равен 1.
UPDATE book
SET created_at = NOW()
WHERE is_published = 1;

-- 12. Создать несколько запросов, где необходимо обновить таблицу author и
-- установить для колонки email составное значение: fist_name _last_name@<любой_ящик>.
-- Например, есть запись Джек (first_name) Лондон (last_name). Значение для email должно быть
-- jack_london@mail.ru.
UPDATE author
SET email = 'joanne_rowling@gmail.com'
WHERE id = 1;
UPDATE author
SET email = 'john_tolkien@mail.ru'
WHERE id =2;
UPDATE author
SET email = 'clive_lewis@yandex.com'
WHERE id =3;
UPDATE author
SET email = 'anjey_sapkovskiy@ex.ua'
WHERE id =4;
UPDATE author
SET email = 'glean_cook@gmail.com'
WHERE id =5;
UPDATE author
SET email = 'george_martin@mail.ru'
WHERE id =6;

-- 13. Создать запрос на выборку записей из таблицы book по колонкам title, created_at.
SELECT title, created_at
FROM book;

-- 14. Создать запрос на выборку записей из таблицы author по колонкам first_name, last_name.
SELECT first_name, last_name
FROM author;

-- 15. Создать запрос на выборку записей из таблиц book_author, book, author.
-- Запрос должен вывести на экран таблицу с колонками:
-- - title из таблицы book
-- - first_name из таблицы author
-- - last_name из таблицы author
-- Таблица должна быть отсортирована по колонке title таблицы book.
-- Написать запрос со слабой связкой (таблицы применением LEFT JOIN).
SELECT title, first_name, last_name
FROM book b
LEFT JOIN author a ON b.id = a.id
ORDER BY title;

-- 16. Создать запрос на выборку записей из таблиц book_author, book, author.
-- Запрос должен вывести на экран таблицу с колонками:
-- - title из таблицы book
-- - first_name из таблицы author
-- - last_name из таблицы author
-- Таблица должна быть отсортирована по колонке title таблицы book.
-- Написать два запроса с жесткой связкой (таблицы в секции FROM и применением INNER JOIN).
SELECT title, first_name, last_name
FROM book b
INNER JOIN author a
ON b.id = a.id
ORDER BY title;

-- 17. Создать запрос с жесткой связкой (INNER JOIN) на выборку записей из таблиц
-- book_author, book, author. Запрос должен вывести на экран таблицу с колонками:
-- - title из таблицы book
-- - first_name из таблицы author
-- - last_name из таблицы author
-- Таблица должна удовлетворять следующим условиям:
-- - is_published равен 1
-- - значения в first_name должно быть только те, у которых имена начинаются на K
-- (букву можно подставить любую, в зависимости от ваших записей в таблице).
-- Таблица должна быть отсортирована по колонке title таблицы book.
SELECT title, first_name, last_name
FROM book
INNER JOIN author ON is_published = 1
WHERE first_name LIKE 'G%'
ORDER BY title;


-- 18. Создать запрос с жесткой связкой (INNER JOIN) на выборку записей из таблиц
-- book_author, book, author. Запрос должен вывести на экран таблицу с колонками:
-- - title из таблицы book
-- - first_name из таблицы author
-- - last_name из таблицы author
-- Таблица должна удовлетворять следующим условиям:
-- - is_published равен 1
-- - условие, при котором в значениях email должна присутстовать фраза mail (фразу
-- можно подставить любую, в зависимости от ваших записей в таблице).
-- Например, есть имейлы jack_london@mail.ru, artur_konan-doil@yandex.ru,
-- charls_dikkens@gmail.com.
-- В выборке будет фраза %mail%. Тогда в результате должны попасть
-- charls_dikkens@gmail.com, jack_london@mail.ru.
-- Таблица должна быть отсортирована по колонке title таблицы book.
SELECT title, first_name, last_name
FROM book
INNER JOIN author ON is_published = 1
WHERE email LIKE '%mail%'
ORDER BY title;

