CREATE TABLE benutzer (
 id INT PRIMARY KEY,
    name TEXT,
 email VARCHAR,
    geburtstag DATE,
 wohnort TEXT,
 beschreibung TEXT
 );
 INSERT INTO benutzer (name, email, geburtstag, wohnort, beschreibung) VALUES
 ('Anna Müller', '
 anna@example.com', '2000-04-12', 'Berlin', 'Anna liebt Tiere 
und Kaffee.\nSie arbeitet als Webdesignerin.'),
 ('Max Mustermann', '
 max@example.com', '1998-07-25', 'Hamburg', 'Max 
programmiert gerne in PHP.\nEr spielt auch Gitarre.'),
 ('Sarah Schmidt', '
 sarah@example.com', '2002-01-08', 'München', 'Sarah ist 
Studentin der Informatik.\nSie interessiert sich für KI und Gaming.'),
 ('Jonas Weber', '
 jonas@example.com', '1995-11-30', 'Köln', 'Jonas reist gerne.
 \nLieblingssprache: JavaScript.'),
 ('Lena Kraus', '
 lena@example.com', '1997-03-18', 'Stuttgart', 'Lena schreibt gerne 
Geschichten.\nLieblingsfarbe: Blau.');