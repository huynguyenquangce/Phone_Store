<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
?>

<?php
if (!isset($_GET['user_id']) || $_GET['user_id'] == '') {
    echo "<script>window.location = 'list.php'</script>";
} else {
    $user_id = $_GET['user_id'];
}
$sql = "SELECT * FROM account WHERE id = '$user_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_password = $_POST['user_password'];
    $user_image = $_FILES['user-img']['name'];
    $update_query = "UPDATE account SET username = '$username', email = '$email', password = '$user_password', image = '$user_image' WHERE id = '$user_id'";
    $result1 = $conn->query($update_query);
    if ($result1) {
        echo "<script>window.location.href='list.php';</script>";
    }
}
?>
<div class="col py-3">
    <form action="add.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="h2 text-primary p-4 row">Add User:</div>
            <label for="username" class="fw-bold">Nhập tên người dùng:</label>
            <input required type="text" class="form-control mt-2" id="username" placeholder="Nhập tên người dùng"
                name="username" value="<?php echo $row['username'] ?>">
            <label for="email" class="fw-bold">Nhập Email:</label>
            <input required type="email" class="form-control mt-2" id="email" placeholder="Nhập email" name="email"  value="<?php echo $row['email'] ?>">
            <label for="user_password" class="fw-bold">Nhập password:</label>
            <input required type="password" class="form-control mt-2" id="user_password" placeholder="Nhập password"
                name="user_password"  value="<?php echo $row['password'] ?>">
            <label for="user-img" class="fw-bold">Ảnh người dùng:</label>
            <input required type="file" class="form-control mt-2" id="user-img" name="user-img">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update User</button>
    </form>
</div>
</div>
</div>
</main>
</body>

</html>