<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
    ?>
<?php
$sql = "SELECT * FROM new";
$result = $conn->query($sql);
$i = 0;
?>
<div class="admin_content_right container-fluid">
    <div class="admin_content_right_category_list">
        <div class="h2 text-primary p-4 row">Tag</div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">New_Title</th>
                    <th scope="col">New_Tag</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        $i++
                            ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['new_title']; ?></td>
                            <td><?php echo $row['new_tag']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td>
                                <a href="edit.php?new_id=<?php echo $row['new_id']; ?>" class="btn btn-primary mx-2">Edit</a>
                                <a href="delete.php?new_id=<?php echo $row['new_id']; ?>" class="btn btn-danger mx-2">Delete</a>
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