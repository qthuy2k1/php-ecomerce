<?php

use App\Models\BaseModel;

class SignUpModel extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT * FROM khach_hang";

        $result = $this->getByQuery($sql);

        return $result;
    }

    public function insert($username, $password, $name, $phone_number, $email, $address, $gender)
    {
        $sql = "INSERT INTO khach_hang VALUE('${username}', '${password}', '${name}', '${phone_number}', '${email}', '${address}', '${gender}')";

        $this->_query($sql);
    }
}
