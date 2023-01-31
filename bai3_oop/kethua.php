<?php
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;
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
class NguoiLon extends ConNguoi {

    public $longNach;

    public function di() {
        echo "đi bằng".$this->chan."chân";
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
$nguoilon = new NguoiLon();
$nguoilon->an();
$nguoilon->setChan(4);
$nguoilon->di();
//khởi tạo đối tượng trẻ con
//gọi phương thức ăn
$tc = new TreCon();
$tc->an();
$tc->setChan(2);
$tc->setTay(2);
$tc->bo();
//trẻ con bò bằng 2 chân 2 tay
//
?>