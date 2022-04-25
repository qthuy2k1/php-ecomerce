<?php

use App\Models\BaseModel;

class PhonesModel extends BaseModel
{

    public function getAll($initial_page, $limit)
    {

        if(!empty($_GET['type'])) {
            $productType = $_REQUEST['type'];
        }
        else {
            $productType = '2';
        }
        $sql = "SELECT * FROM san_pham JOIN chi_tiet_dien_thoai ON san_pham.ma_san_pham = chi_tiet_dien_thoai.ma_san_pham WHERE ma_loai = ${productType} GROUP BY ten_san_pham ORDER BY gia_tien DESC LIMIT $initial_page, $limit";

        $result = $this->getByQuery($sql);

        return $result;
    }
    public function countRows()
    {
        $sql = "SELECT * FROM san_pham";
        $result = $this->_query($sql);
        $total_rows = mysqli_num_rows($result);
        return $total_rows;
    }
}
