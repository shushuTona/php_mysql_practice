<?php
    $API_ROUTE_LIST = [
        '/api/test' => 'Test.php',
        '/api/checkCookie' => 'CheckCookie.php',
        '/api/testSession' => 'TestSession.php',
    ];

    // remove query string
    $request_uri = !empty($_SERVER['QUERY_STRING']) ? mb_strstr($_SERVER['REQUEST_URI'], '?', true) : $_SERVER['REQUEST_URI'];

    foreach ($API_ROUTE_LIST as $api_path => $class_path) {
        if(
            $request_uri === $api_path
        ){
            require_once(API_ROOT_DIR . $class_path);
            break;
        }
    }
