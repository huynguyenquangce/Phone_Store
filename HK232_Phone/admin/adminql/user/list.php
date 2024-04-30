<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
    ?>
<?php
$sql = "SELECT * FROM account";
$result = $conn->query($sql);
$i = 0;
?>
<div class="admin_content_right container-fluid">
    <div class="admin_content_right_category_list">
        <div class="h2 text-primary p-4 row">User</div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User_ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
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
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td>
                                <a href="edit.php?user_id=<?php echo $row['id']; ?>" class="btn btn-primary mx-2">Edit</a>
                                <a href="delete.php?user_id=<?php echo $row['id']; ?>" class="btn btn-danger mx-2">Delete</a>
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