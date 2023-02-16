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
    public function addProduct() {
        $this->render('product.add');
    }
    public function addProductPost() {
        if (isset($_POST['them'])) {
            $errors = []; //tạo ra 1 mảng lỗi bằng rỗng
            //nếu ng dùng bỏ trống tên sản phẩm
            if (empty($_POST['ten_sp'])) {
                $errors[] = "Không được bỏ trống tên sản phẩm";
            }
            //nếu ng dùng bỏ trống đơn giá
            if (empty($_POST['don_gia'])) {
                $errors[] = "Không được bỏ trống đơn giá";
            }
            if (count($errors) > 0) {
                redirect('errors',$errors,'add-product');
            } else {
                $product = new Product();
                $result = $product->addProduct(NULL,$_POST['ten_sp'],$_POST['don_gia']);
                if ($result) {
                    redirect('success','Thêm sản phẩm thành công','add-product');
                }
            }
        }
    }
}