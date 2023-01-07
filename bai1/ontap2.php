<?php
// hàm 2 loại
// có trả về - tính tái sử dụng cao hơn
// không trả về
function hienthi($a,$b,$c = 9) {
    echo $a + $b + $c;
}
hienthi(7,8,10);

// dùng để tái sử dụng và gom code dễ quản lý code hơn
//tạo 1 hàm không trả về hiển thị thông tin sinh viên gồm các tham số truyền vào
//họten,masv,namsinh,email
// hiển thị ra thông tin sinh viên theo những tham số truền vào
//hoten-masv-tuoi-email
//tuổi = năm hiện tại - năm sinh //
// get current year in php
?>