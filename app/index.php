<?php
    require_once('/var/www/php_mysql_practice/app/env.php');
    require_once(APPLICATION_ROOT_DIR . 'db.php');

    if(
        preg_match('/^\/api\//', $_SERVER['REQUEST_URI'])
    ) {
        require_once(ROUTES_ROOT_DIR . 'api.php');
    } else {
        require_once(ROUTES_ROOT_DIR . 'web.php');
    }
