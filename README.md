# PHP File Uploader

## How to use

1. Clone this repository with `git clone https://github.com/Slddev/php-fileuploader`.
2. Upload files to webserver.
3. Execute this database query: 
 ```CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
```
4. Set database info in `config.php`
5. Test it.

## Notes

- Use PHP 7.4 for best compatibility.
- To change size limits and other settings open `upload.php`, `iupload.php`, and `pupload.php` 
- Do not remove the credits.
