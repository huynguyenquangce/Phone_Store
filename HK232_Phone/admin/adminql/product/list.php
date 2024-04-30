<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
    ?>
<?php
$sql = "SELECT product.*, brand.brand_name FROM product INNER JOIN brand ON product.brand_id = brand.brand_id 
        ORDER BY product.products_id ASC";
$result = $conn->query($sql);
$i = 0;
?>
<div class="admin_content_right container-fluid">
    <div class="admin_content_right_category_list">
        <div class="h2 text-primary p-4 row">Product</div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Price Root</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result) {
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['products_name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['discount']; ?></td>
                            <td><?php echo $row['brand_name']; ?></td>
                            <td>
                                <a href="edit.php?product_id=<?php echo $row['products_id']; ?>"
                                    class="btn btn-primary mx-2">Edit</a>
                                <a href="delete.php?product_id=<?php echo $row['products_id']; ?>"
                                    class="btn btn-danger mx-2">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>