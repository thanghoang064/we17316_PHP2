<?php
namespace App\Controllers;


use App\Models\Product;

class ProductController extends BaseController {
    public function __construct(){

    }
    public function index() {
        $title = "Danh sách sản phẩm";
        $product = new Product();
        //hứng được giá trị từ hàm getProduct
        $products = $product->getProduct();
        //gọi view blade và bắn dữ liệu sang view blade
        $tieuDe = "Trang danh sách sản phẩm";
        $this->render('product.list',compact('title','tieuDe','products'));
    }
}