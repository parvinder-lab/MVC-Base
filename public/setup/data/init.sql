USE CMS;
CREATE TABLE authors (
    email VARCHAR(128) NOT NULL PRIMARY KEY,
    firstname VARCHAR(128) NOT NULL,
    lastname VARCHAR(128) NOT NULL,
    biography TEXT NOT NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    pass_hash VARCHAR(255) NOT NULL,
    last_login_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

INSERT INTO authors (firstname, lastname, biography, pass_hash, email, last_login_date) 
values ("Parvinder", "Singh", "I am a student", "mycambrian", "a00210586@mycambrian.ca", 12-11-11);


