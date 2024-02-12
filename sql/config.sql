
CREATE DATABASE IF NOT EXISTS `gestione_libreria`;


USE `gestione_libreria`;


CREATE TABLE IF NOT EXISTS `libri` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `titolo` VARCHAR(255) NOT NULL,
    `autore` VARCHAR(255) NOT NULL,
    `anno_pubblicazione` INT NOT NULL,
    `genere` VARCHAR(100) NOT NULL,
    `image_path` VARCHAR(255) NOT NULL
);


INSERT INTO `libri` (`id`, `titolo`, `autore`, `anno_pubblicazione`, `genere`, `image_path`) VALUES
(4, 'Bride (B&N Exclusive Edition)', 'Ali Hazelwood', 2024, 'Fiction', 'https://m.media-amazon.com/images/I/418KnemQK6L._SY445_SX342_.jpg'),
(5, 'Fairy Tale', 'Stephen King', 2022, 'Fiction', 'https://m.media-amazon.com/images/I/51YaC5DQXeL._SY445_SX342_.jpg'),
(6, 'The Shadow Cabinet: A Novel', 'Juno Dawson', 2023, 'Fantasy', 'https://m.media-amazon.com/images/I/81c5w-sdxjL._SY466_.jpg'),
(7, 'He\'s Not My Type', 'Meghan Quinn', 2023, 'Romance', 'https://m.media-amazon.com/images/I/81kqMVnc+kL._SY466_.jpg'),
(8, 'House of Flame and Shadow', 'Sarah J. Maas', 2024, 'Romance', 'https://m.media-amazon.com/images/I/91jbHTNpy6L._SY466_.jpg'),
(9, 'The Book Thief', 'Markus Zusak', 2005, 'Historical Fiction', 'https://m.media-amazon.com/images/I/71H52+sSb4L._SY466_.jpg'),
(10, 'To Kill a Mockingbird', 'Harper Lee', 1960, 'Classics', 'https://m.media-amazon.com/images/I/51g3u0pKK4L._SY445_SX342_.jpg'),
(11, 'Pride and Prejudice', 'Jane Austen', 1813, 'Romance', 'https://m.media-amazon.com/images/I/91E9-FyfvGL._SY466_.jpg'),
(12, '1984', 'George Orwell', 1949, 'Science Fiction', 'https://m.media-amazon.com/images/I/71GuYZ9CinL._SY466_.jpg'),
(13, 'The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Classics', 'https://m.media-amazon.com/images/I/51mPolu8zmL._SY445_SX342_.jpg'),
(14, 'The Catcher in the Rye', 'J.D. Salinger', 1951, 'Classics', 'https://m.media-amazon.com/images/I/51lprH3LF4L._SY445_SX342_.jpg');


