--   Simple book schema
--
--   FIELDS
--
--   id - The row id
--   edition - The release edition of the book
--   author - The person(s) who wrote the book
--   isbn - The International Standard Book Number for the book, should be stripped of '-' dashes
--   publisher - The individual or company that published the book
--   pageCount - How many pages long the book is
--

CREATE TABLE Book (
   `id` INT AUTO_INCREMENT,
   `edition` VARCHAR(20),
   `author` VARCHAR(50),
   `isbn` VARCHAR(13),
   `publisher` VARCHAR(50),
   `pageCount` INT,
    PRIMARY KEY(id)
);

