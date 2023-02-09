<?php
//require file vào đây
//require_once "controllers/CategoryController.php";
//require_once "controllers/CustomerController.php";
//require_once "models/Product.php";
require_once "vendor/autoload.php";
use App\Controllers\CategoryController;
use App\Controllers\CustomerController;
use App\Models\Product;
$categoryController = new CategoryController();
$customerController = new CustomerController();
$product = new Product();
// khởi tạo CategoryController và CustomerController và Product