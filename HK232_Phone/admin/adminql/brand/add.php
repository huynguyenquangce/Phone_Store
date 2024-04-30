<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
    ?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $brand_name = $_POST['brand_name'];
    $brand_image = $_POST['brand_image'];
    $sql = "INSERT INTO brand (brand_name,brand_image) VALUES ('$brand_name','$brand_image')";
    $result = $conn->query($sql);
    if ($result) {
        echo "<script>window.location.href='list.php';</script>";
    }
}
?>
<div class="col py-3">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="h2 text-primary p-4 row">Add Brand:</div>
            <label for="brand_name" class="fw-bold">Nhập tên thương hiệu:</label>
            <input required type="text" class="form-control mt-2" id="brand_name" placeholder="Nhập tên thương hiệu"
                name="brand_name">
            <label for="brand_image" class="fw-bold">Nhập ảnh thương hiệu:</label>
            <input required type="text" class="form-control mt-2" id="brand_image" placeholder="Nhập ảnh thương hiệu"
                name="brand_image">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add Brand</button>
    </form>
</div>
</div>
</div>
</main>
</body>

</html>