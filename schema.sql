--
--   Column types are defined like TYPE(LENGTH), VARCHAR(255) is a string with a max length of 255, and INT(10) is an integer with a max of 10 digits
--   "NOT NULL" on a row is information we definitley want an entry to have, while "DEFAULT NULL" can be thought of as optional when the information is not availible
--

--
--   Table: book
--
--   id - The row id. Do not insert a value for this, it will automatically get a unique value (counting up) when a row is created
--   title - The title of the book
--   edition - The release edition of the book
--   author - The person(s) who wrote the book
--   genre - The genre of the book, if applicable
--   category - The age category (or reference) that the book falls under; Reference, Children, Young Adult, etc...
--   isbn - The International Standard Book Number for the book, should be stripped of '-' dashes
--   publisher - The individual or company that published the book
--   year_published - The year the book was published (Should be DATE instead?)
--   amazon_href - The link to purchase the book from amazon
--   ebook_href - The link to read the book online
--   location - Where one or more copies of the book are physically located
--   pages - How many pages long the book is
--   cover - The link to or name of an image for the book's cover
--

CREATE TABLE `book` (
   `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
   `title`  VARCHAR(80) NOT NULL,
   `edition` VARCHAR(20) DEFAULT NULL,
   `author` VARCHAR(100) NOT NULL,
   `genre` VARCHAR(25) DEFAULT NULL,
   `category` VARCHAR(20) DEFAULT NULL,
   `isbn` VARCHAR(13) DEFAULT NULL,
   `publisher` VARCHAR(50) DEFAULT NULL,
   `year_published` INT(4) UNSIGNED DEFAULT NULL,
   `amazon_href` VARCHAR(255) DEFAULT NULL,
   `ebook_href` VARCHAR(255) DEFAULT NULL,
   `location` VARCHAR(50) NOT NULL,
   `pages` INT(5) NOT NULL,
   `cover` VARCHAR(80) DEFAULT NULL,
    PRIMARY KEY(`id`)
) ENGINE=InnoDB;

