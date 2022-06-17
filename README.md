# Sporty Marine

## Groepsleden

- Bryan Bao
- Enno Andel
- Remco Denekamp
- Michael Vrijbrug
- Joost Dijkstra

## Relevante documentatie

- [Projectdefinitie](https://docs.google.com/document/d/1dld1MEQZXLTkF2HZgFMW62Ycbzer9MT_L3y4cgfvelI/edit?usp=sharing)

## Live environment

- Onze klant had nog geen live omgeving geregeld dus alles is nog lokaal.

## Code

- [Github](https://github.com/C2-Solutions/sporty-marine)

## Database Dump

- Te vinden in [db.sql]([db_sql](https://github.com/C2-Solutions/sporty-marine/blob/master/db.sql))

## Inloggegevens stappenplan

1) Change username and password in the following files:

   - database.ini
   - db.sql (bottom of the file)

   By default these are the following values:

   | username | password--- |
   | -------- | ----------- |
   | admin    | password123 |

2) Open up a terminal and log into mysql

   ```powershell
   mysql
   ```

3) Create the user

   ```mysql
   CREATE USER 'admin'@'localhost' IDENTIFIED BY 'password';
   ```

4) Give admin privileges

   ```mysql
   GRANT ALL PRIVILEGES ON *.* TO 'admin'@localhost IDENTIFIED BY 'password';
   ```

## Starting the server

Open up a terminal in the root directory and run the following command:

```powershell
php -S 127.0.0.1:8000
```
