<?php
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    //đây là hàm khởi tạo
    public function __construct($chan,$tay,$mat,$mui)
    {
        $this->chan = $chan;
        $this->tay = $tay;
        $this->mat = $mat;
        $this->mui = $mui;
    }

    public function an() {
        echo "ăn bằng mồm ";
    }
    public function setChan($chan) {
        $this->chan = $chan;
    }
    public function setTay($tay) {
        $this->tay = $tay;
    }
}
//nếu class con chưa có hàm khởi tạo thì class con sẽ tự động nhận hàm khởi tạo từ
// class cha
//khi class con có hàm tạo thì class con sẽ tự nhận hàm khởi tạo của chính nó chứ không nhận của
//cha nữa
class NguoiLon extends ConNguoi {

    public $longNach;
    public function __construct($chan,$tay,$mat,$mui,$longNach)
    {
//        $this->chan = $chan
        //gọi hàm khởi tạo của cha xuống
        parent::__construct($chan,$tay,$mat,$mui);
        $this->longNach = $longNach;
    }

    public function di() {
        echo "đi bằng".$this->chan."chân".$this->tay." tay".$this->mat."Mặt".$this->mui."mũi";
        echo "Lông nách".$this->longNach;
    }

    public function noi() {

    }
}
class TreCon extends ConNguoi {


    public function bo() {
        echo "Trẻ con bò bằng ". $this->chan."chân".$this->tay."tay";
    }

}
//khởi tạo đối tượng người lớn
$nguoilon = new NguoiLon(1,2,3,4);
//$nguoilon->an();
//$nguoilon->setChan(4);
$nguoilon->di();
//khởi tạo đối tượng trẻ con
//gọi phương thức ăn
//$tc = new TreCon();
//$tc->an();
//$tc->setChan(2);
//$tc->setTay(2);
//$tc->bo();
//trẻ con bò bằng 2 chân 2 tay
//
?>