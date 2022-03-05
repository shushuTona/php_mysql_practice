<?php
    $API_ROUTE_LIST = [
        '/api/test' => 'Test.php',
    ];

    // remove query string
    $request_uri = mb_strstr($_SERVER['REQUEST_URI'], '?', true);
    foreach ($API_ROUTE_LIST as $api_path => $class_path) {
        if(
            $request_uri === $api_path
        ){
            require_once(API_ROOT_DIR . $class_path);
        } else {
            echo 'not found';
        }
    }
