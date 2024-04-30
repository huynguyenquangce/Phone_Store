<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="icon" href="./img/ltnn.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Custom styles */
        body {
            background-color: #f8f9fa;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-top: 50px;
        }

        .form-outline {
            margin-bottom: 20px;
        }

        .form-label {
            color: #495057;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .btn-primary {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            border-radius: 4px;
            background-color: #007bff;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .success-message {
            color: green;
            font-size: 16px;
        }

        .login-link {
            font-size: 14px;
        }

        .heading {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="heading">Đăng ký</h2>
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <img src="./img/new-smartphones-wallpaper-preview.jpg" alt="No image" style="width:100%">
            </div>
            <div class="col-lg-4 col-md-6">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Tên tài khoản</label>
                        <input type="text" class="form-control mt-2" placeholder="7-30 kí tự thuộc a-z hoặc A-Z"
                            name="username" minlength="7" maxlength="30" required>
                    </div>


                    <div class="form-group mt-2">
                        <label for="email">Email</label>
                        <input type="email" id="IDemail" class="form-control mt-2" placeholder="@gmail.com" name="email"
                            required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control mt-2" name="password" placeholder="7-30 kí tự"
                            required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="password">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control mt-2" placeholder="7-30 kí tự" name="repassword"
                            required>
                    </div>
                    <br>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary" name="register">Đăng ký</button>
                    </div>
                    <?php
                    // xử lí đầu vào
                    function test_input($data)
                    {
                        $data = trim($data); // loai bo khoang trang dau va cuoi chuoi
                        $data = stripslashes($data); // loai bo cac dau gach cheo co the duoc them vao de danh dau ki tu dac biet
                        $data = htmlspecialchars($data); // chuyen doi cac ki tu dac biet thanh cac the html tuong ung
                        return $data;
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $username = test_input($_POST["username"]);
                        $email = test_input($_POST["email"]);
                        $password = test_input($_POST["password"]);
                        $repassword = test_input($_POST["repassword"]);

                        // Kiểm tra lỗi đầu vào
                        $errors = array();

                        if (!preg_match("/^.{7,30}$/", $username)) {
                            $errors[] = "Tên tài khoản phải từ 7-30 kí tự";
                        }

                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $errors[] = "Email không hợp lệ.";
                        }

                        // Hiển thị thông báo lỗi nếu có
                        if (!empty($errors)) {
                            echo "<ul>";
                            foreach ($errors as $error) {
                                echo "<li class='error-message'>$error</li>";
                            }
                            echo "</ul>";
                        }
                        $db = mysqli_connect('localhost', 'root', '', 'hk232_phone');
                        $sql = " SELECT * FROM account";
                        $result = mysqli_query($db, $sql);
                        $check_fault = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Kiểm tra thông tin đăng nhập
                            // Trong ví dụ này, ta sẽ sử dụng username làm mật khẩu
                            if ($row['email'] == $_POST['email']) {
                                echo "<p class='error-message'>Email đã tồn tại</p>";
                                $check_fault = 1;
                            }
                            if ($row['username'] == $_POST['username']) {
                                echo "<p class='error-message'>Username đã tồn tại</p>";
                                $check_fault = 1;
                            }
                        }
                        if ($_POST['password'] != $_POST['repassword']) {
                            echo "<p class='error-message'>Nhập lại mật khẩu không trùng khớp</p>";
                            $check_fault = 1;
                        }
                        if (!$check_fault && !count($errors)) {
                            $new_sql = "INSERT INTO account(username, password, email, image) VALUES ('" . $_POST['username'] . "', '" . $_POST['password'] . "', '" . $_POST['email'] . "','avatar.jpg')";
                            mysqli_query($db, $new_sql);
                            echo "<p class='success-message'>Đăng ký thành công</p>";
                        }
                    }
                    ?>
                    <div class="text-center text-lg-start mt-1 pt-2">
                        <p class="small fw-bold mt-2 pt-1 mb-0">
                            <a class="login-link text-danger text-decoration-none" href="log_in.php">Trở về trang đăng nhập</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>