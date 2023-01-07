<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url)  {
    case '/':
        //dieu huong ve controler product
        require_once 'controllers/ProductController.php';
        echo listProduct();
        break;
    case 'add-product':
        //goi ra day
        require_once 'controllers/ProductController.php';
        echo addProduct();
        break;

}
?>