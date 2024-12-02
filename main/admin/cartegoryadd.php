<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>

<?php
$cartegory = new cartegory;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_name = $_POST['cartegory_name'];
    $insert_cartegory = $cartegory-> insert_cartegory($cartegory_name);
}
?>
<?php
$servername = "localhost";
$database = "demo_ivymoda";
$username = "root";
$password = "";
// create connection
$conn = mysqli_connect($servername,$username,$password,$database);
//check connection
if(!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
echo "";
?>


<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm Danh Mục</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input require name="cartegory_name" type="text" placeholder="Nhập tên danh mục">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>