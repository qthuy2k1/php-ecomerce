<?php

use App\Models\BaseModel;

class HomeModel extends BaseModel
{
    public function getAll($productType = '0')
    {
        $sql = "SELECT * FROM san_pham JOIN chi_tiet_dien_thoai ON san_pham.ma_san_pham = chi_tiet_dien_thoai.ma_san_pham WHERE ma_loai = ${productType} GROUP BY ten_san_pham ORDER BY gia_tien DESC LIMIT 10";

        $result = $this->getByQuery($sql);

        return $result;
    }
}
