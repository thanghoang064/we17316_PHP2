<?php
//abstract là 1 class cho nên nó cũng có đầy đủ thuộc tính và phương thức nhưng có thêm
// phương thức trìu tượng
//  phương thức trìu tượng phải có abtract ở đầu phương thúc
//abstract đóng vai trò như 1 bản thiết kế cho các class khác khi kế thừa vào phải tuân theo
// abstract class không thể khởi tạo
abstract class DongVat {
    // định nghĩa phương thức trìu tượng
    abstract function chay() ;
    //public function
}
class ConCho extends DongVat {
    public function chay()
    {
        echo "Con chó chạy bằng 4 chân";
    }
}
//class ConMeo extends DongVat {
//
//}
class ConNguoi extends DongVat {
    public function chay()
    {
       echo "Con người chạy bằng 2 chân";
    }
}
//khởi tạo đối tượng concho
$cc = new ConCho();
$cc->chay();

//tạo 1 class Tính chu vi và diện tích hình chữ nhật
//tạo 1 class để tính chu vi và diện tích hình vuông
//tạo 1 class để tính chu vi và diện tích hình thang
// tạo 1 class trìu tượng cho 3 class trên và xác định các phương thức trìu tượng