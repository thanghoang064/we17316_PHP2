<?php
require_once 'models/db.php';
class Product extends Db
{
    public function getProduct()

    {
        $sql = "select * from product";
        return $this->getData($sql);

    }
}