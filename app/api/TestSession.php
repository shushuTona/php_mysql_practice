<?php
    class TestSession {
        function __construct()
        {
            // 
        }

        public function run()
        {
            session_start();

            if (
                !isset($_SESSION['count'])
            ) {
                $_SESSION['count'] = 0;
            } else {
                $_SESSION['count']++;
            }

            $_SESSION['session_id'] = session_id();
            $_SESSION['session_name'] = session_name();

            $json_data = json_encode( $_SESSION );

            header('Content-type: application/json; charset=utf-8');

            echo $json_data;
        }
    }

    $instance = new TestSession();
    $instance->run();
