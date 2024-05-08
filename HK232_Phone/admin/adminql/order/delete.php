<?php
include "../../../connectDB.php"
?>
<?php
if(!isset($_GET['order_id']) || $_GET['order_id'] == '')
{
    echo "<script>window.location = 'list.php'</script>";
}
else
{
    $order_id = $_GET['order_id'];
}
$sql = "DELETE FROM user_order WHERE order_id = '$order_id'";
$result = $conn->query($sql);
if ($result) {
    echo "<script>window.location.href='list.php';</script>";
}
?>