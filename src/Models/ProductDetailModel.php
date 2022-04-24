<?php

use App\Models\BaseModel;

class ProductDetailModel extends BaseModel
{
    public function getAll($id)
    {

        $sql = "SELECT * FROM san_pham JOIN chi_tiet_san_pham ON san_pham.ma_san_pham = chi_tiet_san_pham.ma_san_pham WHERE chi_tiet_san_pham.ma_san_pham = ${id}";

        $result = $this->getByQuery($sql);

        return $result;
    }
}
