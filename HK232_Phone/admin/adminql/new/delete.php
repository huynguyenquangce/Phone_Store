<?php
include "../../../connectDB.php"
?>
<?php
if(!isset($_GET['new_id']) || $_GET['new_id'] == '')
{
    echo "<script>window.location = 'list.php'</script>";
}
else
{
    $new_id = $_GET['new_id'];
}
$sql = "DELETE FROM new WHERE new_id = '$new_id'";
$result = $conn->query($sql);
if ($result) {
    echo "<script>window.location.href='list.php';</script>";
}
?>