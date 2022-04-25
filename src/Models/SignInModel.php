<?php

use App\Models\BaseModel;

class SignInModel extends BaseModel
{
    public function getAll($username, $password)
    {
        $sql = "SELECT * FROM khach_hang where tai_khoan = '${username}' and mat_khau = '${password}'";

        $result = $this->getByQuery($sql);

        return $result;
    }
}
