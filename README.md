# MVC todoList
--
### Prerequisite
    Server Apache2 or Nginx
    PHP >= 7.2
    PHP Composer
    PHP extension
        ext-cli
        ext-common
        ext-curl
        ext-gd
        ext-json
        ext-mbstring
        ext-intl
        ext-mysql
        ext-xml
        ext-zip
        ext-fpm
        ext-bcmath
        ext-pdo
    Mysql
    
Reference setup environment:
https://docs.google.com/document/d/1Dbe0j4lEQ4jc2zTq9K4StOMIHOInGknJIHdZQIzHlFg/edit?usp=sharing

### How to install
    Clone project
    Create database
        Access mysql and create database name `db_todolist`
        Import DB in "storage/db_todolist.sql"
    Update file config database with your environment
    Run command: php -S localhost:9000
    Access browser with domain: localhost:9000

