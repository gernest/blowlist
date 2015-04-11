CREATE TABLE listings (
  id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY ,
  title VARCHAR(200) NOT NULL ,
  slug VARCHAR(200) NOT NULL ,
  description TEXT,
  kind VARCHAR(200),
  tags MEDIUMTEXT,
  FULLTEXT (title,description,kind,tags)
)ENGINE=innoDB ;

