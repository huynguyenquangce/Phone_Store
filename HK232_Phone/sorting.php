<?php

// Kết nối database
require("connectDB.php");

$brand_id =   $_POST["id"];
// Lấy dữ liệu từ database
if($_POST['type']=='asc') $sql = "SELECT * FROM product WHERE brand_id = $brand_id   ORDER BY price ASC";
else if ($_POST['type']=='des') $sql = "SELECT * FROM product WHERE brand_id = $brand_id  ORDER BY price DESC";
else $sql = "SELECT * FROM product WHERE brand_id =  $brand_id  ";
$result = mysqli_query($conn, $sql);

// Chuyển dữ liệu thành mảng JSON
$data = array();
while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
echo json_encode($data);

// Đóng kết nối
mysqli_close($conn);

?>