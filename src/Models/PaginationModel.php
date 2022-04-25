<?php

use App\Models\BaseModel;

class PaginationModel extends BaseModel
{
    public function countRows()
    {
        $sql = "SELECT * FROM san_pham";
        $result = $this->_query($sql);
        $total_rows = mysqli_num_rows($result);
        return $total_rows;
    }

    public function paginate($initial_page, $limit) {
        $sql = "SELECT * FROM san_pham LIMIT $initial_page, $limit";

        $result = $this->getByQuery($sql);

        return $result;
    }
}
