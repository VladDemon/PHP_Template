<?php 
define("sql_user", getenv('DB_USER'));
define("sql_host", getenv("SQL_HOST"));
define("sql_pass", "");
define("sql_table", "loumvc");
define("title", "Лёгкий MVC");

function pre($str, $die = false) {
    print_r('<pre>');
    print_r($str);
    print_r( '</pre>');
    if ($die) {
        die();
    }
}