<?php
    header('Content-Type: application/json; charset=UTF-8');

    $result = [
        'hoge' => 100,
        'piyo' => 200,
        'fuga' => 300,
    ];

    echo json_encode($result, JSON_UNESCAPED_SLASHES);
