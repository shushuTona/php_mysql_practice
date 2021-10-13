<?php
    define('PHP_ROOT_DIR', '/var/www/php_mysql_practice/app/');

    if ($_SERVER['REQUEST_URI'] === '/api/hoge') {
        require_once(PHP_ROOT_DIR . 'index.php');
    }
