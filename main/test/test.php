<?php
$sinhvien = 'Nguyen Van A,nguyen van B';
echo $sinhvien; // Xuất ra màn hình
define('ten','duc son');
echo ten;
?>
<?php
$a = '123'; // biến $a có giá trị là chuỗi 'a123'
$a = (int)$a; // chuyển $a sang kiểu INT
echo $a; // kết quả xuất ra màn hình là số 0
?>
<?php
$sinhvien = array('Nguyễn Văn A', 'Nguyễn Văn B');
echo $sinhvien[0];
echo $sinhvien[1];
$a = 100;
$b = 200;
$tong = $a + $b;
$check = ($a < $b) && ($tong > 200);
echo $tong;
echo $check;
?>