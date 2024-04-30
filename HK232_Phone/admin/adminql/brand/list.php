<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
    ?>
<?php
$sql = "SELECT * FROM brand";
$result = $conn->query($sql);
$i = 0;
?>
<div class="admin_content_right container-fluid">
    <div class="admin_content_right_category_list">
        <div class="h2 text-primary p-4 row">Brand</div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brand_ID</th>
                    <th scope="col">Brand_Name</th>
                    <th scope="col">Brand_Image</th>
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
                            <td><?php echo $row['brand_id']; ?></td>
                            <td><?php echo $row['brand_name']; ?></td>
                            <td><?php echo $row['brand_image']; ?></td>
                            <td>
                                <a href="delete.php?brand_id=<?php echo $row['brand_id']; ?>" class="btn btn-danger mx-2">Delete</a>
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