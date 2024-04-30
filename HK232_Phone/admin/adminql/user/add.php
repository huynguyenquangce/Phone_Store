<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_password = $_POST['user_password'];
    // image
    $user_image = $_FILES['user-img']['name'];
    $tmpname_user = $_FILES["user-img"]["tmp_name"];
    $des = "../../../uploads/".$user_image;
    move_uploaded_file($tmpname_user, $des);
    $sql = "INSERT INTO account (username,email,password,image) VALUES ('$username', '$email', '$user_password', '$user_image')";
    $result = $conn->query($sql);
    if ($result) {
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
                name="username">
            <label for="email" class="fw-bold">Nhập Email:</label>
            <input required type="email" class="form-control mt-2" id="email" placeholder="Nhập email" name="email">
            <label for="user_password" class="fw-bold">Nhập password:</label>
            <input required type="password" class="form-control mt-2" id="user_password" placeholder="Nhập password"
                name="user_password">
            <label for="user-img" class="fw-bold">Ảnh người dùng:</label>
            <input required type="file" class="form-control mt-2" id="user-img" name="user-img">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add User</button>
    </form>
</div>
</div>
</div>
</main>
</body>

</html>