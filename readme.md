A small tutorial I followed out with school work when I was at the Wild Code School in France for my training.

https://www.youtube.com/watch?v=BaEm2Qv14oU - How To Create A OOP PHP Login System For Beginners | OOP PHP & PDO | OOP PHP Tutorial

Timestamp 52m

***Still need to implement login.

### Put this command into your mysql CLI to be able to try the sign-in feature.
create database signuplogin2;

use signuplogin2;

create table users (
    -> users_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    -> users_uid TINYTEXT not null,
    -> users_pwd LONGTEXT not null,
    -> users_email TINYTEXT not null );

    Don't forget to change dbh.classes.dist to dbh.classes.php and add your username and passowrd.