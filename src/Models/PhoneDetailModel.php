<?php

use App\Models\BaseModel;

class PhoneDetailModel extends BaseModel
{
    public function getAll($id)
    {

        $sql = "SELECT * FROM san_pham JOIN chi_tiet_dien_thoai ON san_pham.ma_san_pham = chi_tiet_dien_thoai.ma_san_pham WHERE chi_tiet_dien_thoai.ma_san_pham = ${id}";

        $result = $this->getByQuery($sql);

        return $result;
    }
}
