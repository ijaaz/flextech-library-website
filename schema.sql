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
--   year_published - The year the book was published (Should be DATE instead?)
--   amazon_href - The link to purchase the book from amazon
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
   `pages` INT(5) NOT NULL,
   `cover` VARCHAR(80) DEFAULT NULL,
    PRIMARY KEY(`id`)
) ENGINE=InnoDB;


--
--   Table: event
--
--   id - The row id
--   title - The title of the event
--   date - When the event is taking place (Should be DATE or DATETIME instead?)
--   location - Where the even is taking place (Should be required?)
--

CREATE TABLE `event` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(80) NOT NULL,
    `startdate` VARCHAR(30) NOT NULL,
    `enddate` VARCHAR(30) NOT NULL,
    `location` VARCHAR(100) DEFAULT NULL,
    `description` VARCHAR(300) NOT NULL,
    PRIMARY KEY(`id`)
) ENGINE=InnoDB;
