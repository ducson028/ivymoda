<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>

<?php
$product = new product;

    $product_id = $_GET['product_id'];
    $get_product = $product -> get_product($product_id);
    if($get_product) {
        $resultA = $get_product -> fetch_assoc();
    }




if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $product_name = $_POST['product_name'];
    $product_id = $_POST['product_id'];
    $brand_name = $_POST['brand_name'];
    $product_price = $_POST['product_price'];
    $product_price_new = $_POST['product_price_new'];
    $product_desc = $_POST['product_desc'];
    $update_product = $product-> update_product($product_name,$product_id,$brand_name,$product_price,$product_price_new,$product_desc);
}
?>

<style>
    select{
        height: 30px;
        width: 200px;
    }
</style>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Sửa Danh Sách Sản Phẩm</h1> <br>
                <form action="" method="POST">
                <input require name="product_name" type="text" placeholder="Nhập tên sản phẩm" 
                    value="<?php echo $resultA['product_name']?>"> <br><br>
                <input require name="product_id" type="text" placeholder="Nhập mã sản phẩm" 
                    value="<?php echo $resultA['product_id']?>"> <br><br>
                <input require name="brand_name" type="text" placeholder="Nhập loại sản phẩm" 
                value="<?php echo $resultA['brand_id']?>"> <br><br>
                <input require name="product_price" type="text" placeholder="Nhập giá sản phẩm" 
                    value="<?php echo $resultA['product_price']?>"><br><br>
                <input require name="product_price_new" type="text" placeholder="Nhập giá khuyến mãi" 
                    value="<?php echo $resultA['product_price_new']?>"><br><br>
                 <input require name="product_desc" type="text" placeholder="Nhập mô tả sản phẩm" 
                    value="<?php echo $resultA['product_desc']?>">
                <button type="submit">Sửa</button>
                    
                </form>
            </div>
        </div>
    </section>
</body>
</html>