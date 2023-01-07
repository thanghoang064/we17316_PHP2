<?php
require_once "models/Product.php";
function listProduct() {
    $products = getProduct();
    //test xem co nhan duoc gia tri tu model ko
    include_once "views/product.php";
}
function addProduct() {
    return "Day la trang them san pham";
}

//bai lab
//tao bang nhanvien gom id,tennv,tuoi
// xay dung chuc nang hien thi danh sach nhan vien
//xay dung chuc nang xoa  nhan vien
// xay dung chuc nang them nhan vien
// su dung mo hinh MVC hien tai
?>
