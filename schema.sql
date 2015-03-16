--
--   Table: book
--
--   id - The row id
--   title - The title of the book
--   edition - The release edition of the book
--   author - The person(s) who wrote the book
--   genre - The genre of the book, if applicable
--   category - The age category (or reference) that the book falls under; Reference, Children, Young Adult, etc...
--   isbn - The International Standard Book Number for the book, should be stripped of '-' dashes
--   publisher - The individual or company that published the book
--   year_published - The year the book was published
--   amazon_href - The link to purchase the book from amazon
--   pages - How many pages long the book is
--   cover - The link to or name of an image for the book's cover
--

CREATE TABLE `book` (
   `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
   `title`  VARCHAR(80) NOT NULL,
   `edition` VARCHAR(20) DEFAULT NULL,
   `author` VARCHAR(50) NOT NULL,
   `genre` VARCHAR(25) DEFAULT NULL,
   `category` VARCHAR(20) DEFAULT NULL,
   `isbn` VARCHAR(13) DEFAULT NULL,
   `publisher` VARCHAR(50) DEFAULT NULL,
   `year_published` INT(4) UNSIGNED DEFAULT NULL,
   `amazon_href` VARCHAR(500) DEFAULT NULL,
   `pages` INT(5) NOT NULL,
   `cover` VARCHAR(80) DEFAULT NULL,
    PRIMARY KEY(`id`)
) ENGINE=InnoDB;

