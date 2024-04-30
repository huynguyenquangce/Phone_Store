<?php
include "../../../connectDB.php"
?>
<?php
if(!isset($_GET['product_id']) || $_GET['product_id'] == '')
{
    echo "<script>window.location = 'list.php'</script>";
}
else
{
    $product_id = $_GET['product_id'];
}
$sql = "DELETE FROM product WHERE products_id = '$product_id'";
$result = $conn->query($sql);
if ($result) {
    echo "<script>window.location.href='list.php';</script>";
}
?>