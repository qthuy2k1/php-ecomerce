<?php

use App\Models\BaseModel;

class CartModel extends BaseModel
{
    public function getAll($id)
    {
        $sql = "SELECT * FROM chi_tiet_dien_thoai JOIN san_pham on chi_tiet_dien_thoai.ma_san_pham = san_pham.ma_san_pham WHERE ma_chi_tiet_san_pham = '${id}'";
        $result = $this->getByQuery($sql);

        return $result;
    }
}
