# MVC todoList

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
    Clone project:
        git clone https://github.com/doanhuy200/MVC-todoList.git
    Create database
        Access mysql and create database name `db_todolist`
        Import DB in "storage/db_todolist.sql"
    Update file config database with your environment in
        `confix.php`
    Run command: `composer install`
    Run command: `php -S localhost:9000`
    Access browser with domain: `http://localhost:9000`
    
### How run test
    Run test by command:
        ./vender/bin/phpunit test <path>/fileTest.php --filter=<method in fileTest.php>
    Example:
        ./vendor/bin/phpunit test tests/Work/GetWorkTest.php --filter=testGetWorkSuccess

