<?php
include "../../../connectDB.php"
?>
<?php
if(!isset($_GET['brand_id']) || $_GET['brand_id'] == '')
{
    echo "<script>window.location = 'list.php'</script>";
}
else
{
    $brand_id = $_GET['brand_id'];
}
$sql = "DELETE FROM brand WHERE brand_id = '$brand_id'";
$result = $conn->query($sql);
if ($result) {
    echo "<script>window.location.href='list.php';</script>";
}
?>