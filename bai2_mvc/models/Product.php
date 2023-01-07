<?php
require_once 'models/db.php';
function getProduct(){
    $sql = "select * from product";
    return getData($sql);

}