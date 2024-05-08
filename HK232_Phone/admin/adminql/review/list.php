<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
    ?>
<?php
$sql = "SELECT reviews.*, product.products_name FROM reviews INNER JOIN product ON reviews.pr_id = product.products_id 
ORDER BY reviews.pr_id ASC";
$result = $conn->query($sql);
$i = 0;
?>
<div class="admin_content_right container-fluid">
    <div class="admin_content_right_category_list">
        <div class="h2 text-primary p-4 row">Comment List</div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Product</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Time</th>
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
                            <td><?php echo $row['products_name']; ?></td>
                            <td><?php echo $row['rating']; ?></td>
                            <td><?php echo $row['comment']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>