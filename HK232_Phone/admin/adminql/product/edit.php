<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
    ?>
<?php
if (!isset($_GET['product_id']) || $_GET['product_id'] == '') {
    echo "<script>window.location = 'list.php'</script>";
} else {
    $product_id = $_GET['product_id'];
}
$sql_get = "SELECT * FROM product WHERE products_id = '$product_id'";
$result_get = $conn->query($sql_get);
$row_get = $result_get->fetch_assoc();
?>
<?php
$brand_query = "SELECT * FROM brand";
$row = $conn->query($brand_query);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $product_image = $_POST['product_img'];
    $product_image_desc_1 = $_POST['product_img_1'];
    $product_image_desc_2 = $_POST['product_img_2'];
    $product_image_desc_3 = $_POST['product_img_3'];
    $product_price = $_POST['product_price'];
    $product_discount = $_POST['product_discount'];
    $product_description = $_POST['description'];
    $brand_id = $_POST['brand_id'];
    $rating_tb = $_POST['rating_tb'];
    $sql = "UPDATE product SET products_name='$product_name', image='$product_image', image_desc_1='$product_image_desc_1', image_desc_2='$product_image_desc_2',image_desc_3='$product_image_desc_3', price='$product_price', description ='$product_description', brand_id='$brand_id', discount='$product_discount', rating_tb='$rating_tb' WHERE products_id='$product_id'";
    $result = $conn->query($sql);
    if ($result) {
        echo "<script>window.location.href='list.php';</script>";
    }
}
?>
<div class="col py-3">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="h2 text-primary p-4 row">Add Product:</div>
            <label for="product_name" class="fw-bold">Tên sản phẩm:</label>
            <input required type="text" class="form-control mt-2" id="product_name" placeholder="Nhập tên sản phẩm"
                name="product_name" value="<?php echo $row_get['products_name'];?>">
            <label for="product_img" class="fw-bold">Ảnh sản phẩm:</label>
            <input required type="text" class="form-control mt-2" id="product_img" placeholder="Nhập ảnh sản phẩm"
                name="product_img" value="<?php echo $row_get['image'];?>">
            <label for="product_img_1" class="fw-bold">Ảnh mô tả 1:</label>
            <input required type="text" class="form-control mt-2" id="product_img_1" placeholder="Nhập ảnh mô tả 1"
                name="product_img_1" value="<?php echo $row_get['image_desc_1'];?>">
            <label for="product_img_2" class="fw-bold">Ảnh mô tả 2:</label>
            <input required type="text" class="form-control mt-2" id="product_img_2" placeholder="Nhập ảnh mô tả 2"
                name="product_img_2" value="<?php echo $row_get['image_desc_2'];?>">
            <label for="product_img_3" class="fw-bold">Ảnh mô tả 3:</label>
            <input required type="text" class="form-control mt-2" id="product_img_3" placeholder="Nhập ảnh mô tả 3"
                name="product_img_3" value="<?php echo $row_get['image_desc_3'];?>">
            <label for="product_price" class="fw-bold">Giá sản phẩm:</label>
            <input required type="text" class="form-control mt-2" id="product_price" placeholder="Nhập giá sản phẩm"
                name="product_price" value="<?php echo $row_get['price'];?>">
            <label for="product_discount" class="fw-bold">Giá khuyến mãi:</label>
            <input required type="text" class="form-control mt-2" id="product_discount" name="product_discount" value="<?php echo $row_get['discount'];?>">
            <label for="description" class="fw-bold">Mô tả:</label>
            <input required type="text" class="form-control mt-2" id="description" name="description" value="<?php echo $row_get['description'];?>">
            <label for="brand_id" class="fw-bold">Thương hiệu:</label>
            <select class="form-control mt-2" name="brand_id" required>
                <option value="">-- Chọn thương hiệu --</option>
                <?php while ($brand_row = mysqli_fetch_assoc($row)) { ?>
                    <option value="<?php echo $brand_row['brand_id']; ?>"><?php echo $brand_row['brand_name']; ?></option>
                <?php } ?>
            </select>
            <label for="rating_tb" class="fw-bold">Sao trung bình:</label>
            <input type="text" class="form-control mt-2" name="rating_tb" value="<?php echo $row_get['rating_tb']?>">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Chỉnh sửa sản phẩm</button>
    </form>
</div>
</div>
</div>
</main>
</body>

</html>