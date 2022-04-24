<?php

use App\Models\BaseModel;

class ProductModel extends BaseModel {
    const TABLE = 'san_pham';
    
    public function getAll() {
        
        $productType = $_REQUEST['type'] ?? '1';
        $sql = "SELECT * FROM san_pham JOIN chi_tiet_san_pham ON san_pham.ma_san_pham = chi_tiet_san_pham.ma_san_pham WHERE ma_loai = ${productType} GROUP BY ten_san_pham ORDER BY gia_tien DESC LIMIT 10";

        $result = $this->getByQuery($sql);
        
        return $result;
    }
    
    public function findById($id) {
        return $this->find(self::TABLE, $id);
    }
}