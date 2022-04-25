<?php

use App\Models\BaseModel;

class ProductsModel extends BaseModel
{

    public function getAll($productType = '2')
    {

        if(!empty($_GET['type'])) {
            $productType = $_REQUEST['type'];
        }
        $sql = "SELECT * FROM san_pham JOIN chi_tiet_san_pham ON san_pham.ma_san_pham = chi_tiet_san_pham.ma_san_pham WHERE ma_loai = ${productType} GROUP BY ten_san_pham ORDER BY gia_tien DESC LIMIT 10";

        $result = $this->getByQuery($sql);

        return $result;
    }
}
