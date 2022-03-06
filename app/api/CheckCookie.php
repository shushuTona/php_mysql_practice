<?php
    class CheckCookie {
        public function run()
        {
            if (
                !isset($_COOKIE['TestCookie'])
            ) {
                $cookie_options = array(
                    'expires' => time() + 60 * 1,
                    'httponly' => true,
                );
                setcookie("TestCookie", 'test', $cookie_options);
            }

            $json_data = json_encode( [
                'exist_cookie' => isset($_COOKIE['TestCookie'])
            ] );

            header('Content-type: application/json; charset=utf-8');

            echo $json_data;
        }
    }

    $instance = new CheckCookie();
    $instance->run();
