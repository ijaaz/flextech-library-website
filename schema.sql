--
--   Table: Book
--
--   id - The row id
--   title - The title of the book
--   edition - The release edition of the book
--   author - The person(s) who wrote the book
--   isbn - The International Standard Book Number for the book, should be stripped of '-' dashes
--   publisher - The individual or company that published the book
--   yearPublished - The year the book was published
--   amazonHref - The link to purchase the book from amazon
--   pageCount - How many pages long the book is
--   cover - The link to or name of an image for the book's cover
--

CREATE TABLE Book (
   `id` INT AUTO_INCREMENT,
   `title`  VARCHAR(80),
   `edition` VARCHAR(20),
   `author` VARCHAR(50),
   `isbn` VARCHAR(13),
   `publisher` VARCHAR(50),
   `yearPublished` INT,
   `amazonHref` VARCHAR(500),
   `pageCount` INT,
   `cover` VARCHAR(80),
    PRIMARY KEY(id)
);

