<?php
class SinhVien {
    //đây là thuộc tính hay còn được gọi biến
    public $maSV;
    public $tenSV;
    public $namSinh;
    //phương thức khởi tạo (Hàm đặc  biệt)
    public function __construct($maSV,$tenSV,$namSinh)
    {
        $this->maSV = $maSV;
        $this->tenSV = $tenSV;
        $this->namSinh = $namSinh;
    }

    //tạo ra hàm set giá trị
    public function setMaSV($maSV) {
        $this->maSV = $maSV;
    }
    // phương thức tính tuổi sinh viên
    public function tinhTuoi() {
        return date('Y') - $this->namSinh;
    }
    //phương thức hay còn được gọi là hàm
    public function hienThiThongTin() {
        echo "Mã SV :".$this->maSV."Tên SV: ".$this->tenSV."tuổi: ".$this->tinhTuoi();
    }

}
//khởi tạo đối tượng (Tạo ra nhiều đối tượng sinh viên)
$sv1 = new SinhVien("PH12345","thang",1996);//tạo ra 1 tk sinh viên
//$sv1->setMaSV("PH123456");

$sv1->hienThiThongTin();
//$sv2 = new SinhVien();//tạo ra 1 tk sinh viên nứa
//$sv2->setMaSV("PU43949");
//$sv2->hienThiThongTin();
//tạo 1 class giảng viên gồm thuộc tính tên,mã,nămsinh,lương cơ bản,số giờ dạy
//tạo các phương thức set cho class trên
// tạo phương thức hiển thị giảng viên in bổ sung tuổi giảng viên  và lương giảng viên và xếp loại
// tạo phương thức tính tuổi giảng viên :nam hiện tại - năm sinh (Có trả về)
//tạo phương thức tính lương giảng viên = lương cơ bản * số giờ dạy (Có trả về)
//tạo phương thức xếp loại
// -nếu lương giảng viên >=5000 đạt
//- nếu lương viên < 5000 ko đạt
// khởi tạo 2 đối tượng giảng viên
?>