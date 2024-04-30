<?php
include "../../../connectDB.php"
?>
<?php
if(!isset($_GET['user_id']) || $_GET['user_id'] == '')
{
    echo "<script>window.location = 'list.php'</script>";
}
else
{
    $user_id = $_GET['user_id'];
}
$sql = "DELETE FROM account WHERE id = '$user_id'";
$result = $conn->query($sql);
if ($result) {
    echo "<script>window.location.href='list.php';</script>";
}
?>