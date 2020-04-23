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


CREATE TABLE posts {
    slug VARCHAR(128) NOT NULL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    author VARCHAR(128) NOT NULL,
    post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX (author),
    FOREIGN KEY(author)
    REFERENCES authors (email)
};

INSERT INTO 'posts' (slug, title, content, author)
VALUES("post-a", "POST-A", "<article><h2>Post A</h2><section><p>This is a basic post for the blog.</p><section></article>", "a00210586@mycambrian.ca")