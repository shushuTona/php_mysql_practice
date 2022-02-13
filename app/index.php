<?php
    require_once('/var/www/php_mysql_practice/app/env.php');

    $request_uri = $_SERVER['REQUEST_URI'];
    if(
        preg_match('/^\/api\//', $request_uri)
    ) {
        require_once(ROUTES_ROOT_DIR . 'api.php');
    } else {
        require_once(ROUTES_ROOT_DIR . 'web.php');
    }
