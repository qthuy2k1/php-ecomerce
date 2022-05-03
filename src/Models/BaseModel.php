<?php

namespace App\Models;
use App\Core\Database;
use mysqli;

class BaseModel extends Database {
    protected $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }
    
    public function _query($sql) {
        return mysqli_query($this->conn, $sql);
    }

    public function getByQuery($sql) {
        $query = $this->_query($sql);
        $data = [];

        while($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }
}