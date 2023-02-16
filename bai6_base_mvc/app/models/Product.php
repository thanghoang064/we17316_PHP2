<?php
namespace App\Models;
class Product extends BaseModel {
    protected $table = 'product';
    public function getProduct() {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addProduct($id,$ten_sp,$gia) {
        $sql = "insert into $this->table values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$ten_sp,$gia]);
    }
}