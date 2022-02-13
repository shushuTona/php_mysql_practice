<?php
    class TestDB {
        const HOST = 'db';
        const DB_NAME = 'test_db';
        const USER = 'root';
        const PASS = 'root';
    
        private PDO $pdo;
        
        public function __construct()
        {
            $this->pdo = new PDO(
                                                    'mysql:host=' . self::HOST . ';dbname=' . self::DB_NAME,
                                                    self::USER,
                                                    self::PASS
                                                );
        }

        public function beginTransaction()
        {
            $this->pdo->beginTransaction();
        }

        public function commit()
        {
            $this->pdo->commit();
        }
    }

    $test_db = new TestDB();
