<?php

use App\Models\BaseModel;

class BrandsModel extends BaseModel {
    public function getAll() {
        $sql = "SELECT * FROM hang";

        $result = $this->getByQuery($sql);
        
        return $result;
    }
}