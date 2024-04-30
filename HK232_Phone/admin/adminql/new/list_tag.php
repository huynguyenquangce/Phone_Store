<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
    ?>
<?php
$sql = "SELECT * FROM new_tag";
$result = $conn->query($sql);
?>
<div class="admin_content_right container-fluid">
    <div class="admin_content_right_category_list">
        <div class="h2 text-primary p-4 row">Tag</div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">Tag_ID</th>
                    <th scope="col">Tag_Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row['tag_id']; ?></td>
                            <td><?php echo $row['tag_name']; ?></td>
                            <td>
                                <a href="delete_tag.php?tag_id=<?php echo $row['tag_id']; ?>" class="btn btn-danger mx-2">Delete</a>
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