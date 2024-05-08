<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
    ?>
<?php
$sql = "SELECT user_order.*, product.products_name FROM user_order INNER JOIN product ON user_order.product_id = product.products_id 
ORDER BY user_order.product_id ASC";
// $sql = "SELECT * FROM user_order";
$result = $conn->query($sql);
$i = 0;
?>
<div class="admin_content_right container-fluid">
    <div class="admin_content_right_category_list">
        <div class="h2 text-primary p-4 row">Order List</div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Product</th>
                    <th scope="col">Address</th>
                    <th scope="col">Price</th>
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
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['products_name']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['total_price']; ?></td>
                            <td>
                                <a href="delete.php?order_id=<?php echo $row['order_id']; ?>" class="btn btn-danger mx-2">Delete</a>
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