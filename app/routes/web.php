<?php
    // remove the leading slash in the URL.
    $file = mb_substr($_SERVER['REQUEST_URI'], 1);

    // if QUERY_STRING is set, remove it from the URL.
    $file = WEB_ROOT_DIR . (empty($_SERVER['QUERY_STRING']) ? $file : mb_strstr($file, '?', true) );

    // if ".html" does not exist at the end, add ".html" at the end.
    $file = preg_match('/^.*(?<!\.html)$/', $file) ? ($file . '/index.html') : $file;

    if(
        file_exists($file)
    ) {
        readfile($file);
    } else {
        readfile(WEB_ROOT_DIR . '404.html');
    }
