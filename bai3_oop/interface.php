<?php
//tính đa hình (interface)
//interface không phải là class lại có phương phức trìu tượng
interface DiChuyen {
    //định nghĩa 1 phương thức trìu tượng trong interface
    function chay();
}
class ConCho implements DiChuyen {
    public function chay()
    {
        echo "Con chó chạy bằng 4 chân";
    }
}
class Oto implements DiChuyen {
    public function chay()
    {
        echo "Ô tô chạy bằng 4 bánh ";
    }
}