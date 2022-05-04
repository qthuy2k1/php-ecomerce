<?php

use App\Models\BaseModel;

class PhonesModel extends BaseModel
{

    public function getAll($initial_page, $limit)
    {

        if (!empty($_GET['type'])) {
            $productType = $_REQUEST['type'];
        } else {
            $productType = '2';
        }
        $sql = "SELECT * FROM san_pham JOIN chi_tiet_dien_thoai ON san_pham.ma_san_pham = chi_tiet_dien_thoai.ma_san_pham WHERE ma_loai = ${productType} GROUP BY ten_san_pham ORDER BY gia_tien DESC LIMIT $initial_page, $limit";

        $result = $this->getByQuery($sql);

        return $result;
    }
    public function countRows($brand_id = '')
    {
        if($brand_id == '') {
            $sql = "SELECT * FROM san_pham";
        }
        else {
            $sql = "SELECT * FROM san_pham WHERE ma_hang = ${brand_id}";
        }

        $result = $this->_query($sql);
        $total_rows = mysqli_num_rows($result);

        return $total_rows;
    }
    public function filterByBrand($initial_page, $limit, $brand)
    {
        if (!empty($_GET['type'])) {
            $productType = $_REQUEST['type'];
        } else {
            $productType = '2';
        }

        $sql = "SELECT * FROM san_pham JOIN chi_tiet_dien_thoai ON san_pham.ma_san_pham = chi_tiet_dien_thoai.ma_san_pham WHERE ma_loai = ${productType} AND ma_hang = ${brand} GROUP BY ten_san_pham ORDER BY gia_tien DESC LIMIT $initial_page, $limit";

        $result = $this->getByQuery($sql);

        return $result;
    }
}
