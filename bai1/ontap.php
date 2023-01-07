<?php
$a  = 10;//số nguyên
$b = "FPT"; //Chữ
$c = false; // boolean
//...
//echo $b.$a;
//mảng tuần tự
$mang = [10,9,5,8];
// lay ra phần tử 5 hiển thị lên
//echo $mang[2];
//mảng liên hợp key=>value
$manglh = ["A"=>10,"B"=>9,"C"=>8,"D"=>7];
//echo $manglh["D"];
$color = ["red"=>"Màu đỏ","green"=>"Màu xanh lá","blue"=>"màu xanh dương"];
// yêu cầu tạo ra 1 bảng gồm các dòng hiển thị tên màu bằng tiếng việt
//và mỗi 1 dòng in màu tương ứng với key đã được khai báo
// tạo 1 mảng liên hợp gồm  key lần lượt masv,tensv,tuoi
//hiển thị thông tin ra bảng theo chiều ngang
//nếu tuổi >= 18 tô màu đỏ
// nếu tuổi  < 18 tô màu xanh dương
$tt =["masv"=>"SV001","hoten"=>"Van A", "tuoi"=>17];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>KEY</td>
            <td>VALUE</td>
        </tr>
        <?php foreach ($manglh as $k=>$v) { ?>
            <tr>
                <td><?php echo $k; ?></td>
                <td><?php echo $v; ?></td>
            </tr>
        <?php } ?>
    </table>
    <table border="1">
        <?php foreach ($color as $key=>$value) { ?>
        <tr style="background-color: <?php echo $key; ?>">
            <td><?php echo $value;?></td>
        </tr>
        <?php } ?>
    </table>
    <table border="1">

        <tr>
            <?php foreach ($tt as $key => $value) {
                    $mau = "";
                    if ($key == "tuoi") {
                        $mau =  $value >=18 ? "bgcolor='red'" : "bgcolor='blue'";
                    }
                ?>
                <td <?php echo $mau; ?>><?php echo $value; ?></td>
            <?php } ?>
        </tr>
    </table>
</body>
</html>

