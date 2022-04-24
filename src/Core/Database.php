<?php

namespace App\Core;

class Database {
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DBNAME = 'mvc_website';

    private $conn;

    public function connect() {
        $conn = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DBNAME);
        mysqli_set_charset($conn, 'utf-8');

        if(mysqli_connect_errno() === 0) {
            return $conn;
        }

        return false;
    }
}