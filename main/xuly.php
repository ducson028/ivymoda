<?php

// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'demo_ivymoda')
 or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['dangky'])){
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$email = trim($_POST['email']);




// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM member WHERE username = '$username' OR email = '$email'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO member (username, password, email) VALUES ('$username','$password','$email')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="login.php"; </script>';
"header('Location: login.php')";

if (mysqli_query($conn, $sql)){
echo "Tên đăng nhập: ".$_POST['username']."<br/>";
echo "Mật khẩu: " .$_POST['password']."<br/>";
echo "Email đăng nhập: ".$_POST['email']."<br/>";

}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>'; 
}
}
}
?>


<?php

//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
//Kết nối tới database
include('connect.php');
  
//Lấy dữ liệu nhập vào
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
  
//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
if (!$username || !$password) {
echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
  
// mã hóa pasword
$password = md5($password);
  

//Kiểm tra tên đăng nhập có tồn tại không
$query = "SELECT username, password FROM member WHERE username='$username'";
$result = mysqli_query($connect, $query) or die( mysqli_error($connect));

if (!$result) {
echo "Tên đăng nhập hoặc mật khẩu không đúng!";
} else {
echo "Đăng nhập thành công! <a href='register.php'>Về trang chủ</a>";

}
  

//Lấy mật khẩu trong database ra
$row = mysqli_fetch_array($result);
  
// //So sánh 2 mật khẩu có trùng khớp hay không
// if ($password != $row['password']) {
// echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='login.php'>Trở lại</a>";
// exit;
// }
  
// //Lưu tên đăng nhập
// $_SESSION['username'] = $username;
// echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
// die();
// $connect->close();
}
?>
