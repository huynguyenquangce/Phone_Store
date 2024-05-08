<!DOCTYPE html>
<html lang="vi">

<head>
  <title>Đăng nhập</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="icon" href="./img/logo.png">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }

    .container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
      margin-top: 50px;
    }

    .heading {
      text-align: center;
      margin-bottom: 40px;
      color: #333;
    }

    form {
      margin-top: 30px;
    }

    label {
      font-weight: bold;
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

    .signup-link {
      text-align: center;
      margin-top: 20px;
    }

    .signup-link a {
      color: #007bff;
      text-decoration: none;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }

    .forget-msg {
      color: red;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  if (isset($_SESSION['email'])) {
    header("location: index.php");
    exit;
  }
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $email = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $email);
    $password = $_POST['password'];
    $password = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $password);
    $db = mysqli_connect('localhost', 'root', '', 'hk232_phone');
    $sql = " SELECT * FROM account ";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      // Kiểm tra thông tin đăng nhập
      if ($row['email'] == $email && $row['password'] == $password) {
        // Lưu thông tin người dùng vào session
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $row['username'];
        $_SESSION['image'] = $row['image'];
        $_SESSION['password'] = $password;

        // Chuyển hướng người dùng đến trang info.php
        header("Location: index.php");
        exit; //dung chuong trinh
      }
    }

    // Thông báo lỗi nếu thông tin đăng nhập không hợp lệ
    $error = "Email hoặc mật khẩu không đúng";
  }
  ?>
  <script>
    // Kiểm tra xem cookie đã được lưu trữ hay chưa
    if (document.cookie.includes("email") && document.cookie.includes("password")) {
      // Nếu có, đổ dữ liệu vào form đăng nhập và tích vào checkbox
      let email = getCookie("email");
      let password = getCookie("password");
      console.log(document.getElementById("IDremember"));
      document.getElementById("IDremember").checked = true;
      document.getElementById("IDemail").value = email;
      document.getElementById("IDpassword").value = password;
    }

    function getCookie(name) {
      var value = "; " + document.cookie;
      var parts = value.split("; " + name + "=");
      if (parts.length == 2) return parts.pop().split(";").shift();
    }

    document.addEventListener("DOMContentLoaded", function () {
      document.getElementById("forget").addEventListener("click", function (event) {
        event.preventDefault();
        document.getElementById("forget-msg").innerText = "Mật khẩu đăng nhập đã gửi tới email của bạn";
      });
    });
  </script>
  <div class="container">
    <h2 class="heading">Đăng Nhập</h2>
    <div class="row">
      <div class="col-lg-8 col-md-6">
        <img src="./img/new-smartphones-wallpaper-preview.jpg" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-lg-4 col-md-6">
        <form method="post">
          <!-- Email input -->
          <div class="form-group">
            <label for="email">Địa chỉ Email</label>
            <input type="email" id="IDemail" class="form-control" placeholder="Nhập email" name="email" required>
          </div>

          <!-- Password input -->
          <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" id="IDpassword" class="form-control" placeholder="Nhập mật khẩu" name="password"
              required>
          </div>
          <?php
          // hiển thị thông báo lỗi nếu có
          if (isset($error)) {
            echo "<p style='color: red;'>$error</p>";
          }
          ?>

          <div class="form-group">
            <a href="#" id="forget">Quên mật khẩu?</a>
            <div id="forget-msg" class="forget-msg"></div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit">Đăng nhập</button>
          </div>

          <div class="signup-link">
            <p class="small fw-bold mt-2 pt-1 mb-0">Bạn chưa có tài khoản? <a href="register.php"
                class="text-danger">Đăng ký ngay</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>