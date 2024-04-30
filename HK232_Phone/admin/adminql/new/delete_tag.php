<?php
include "../../../connectDB.php"
?>
<?php
if(!isset($_GET['tag_id']) || $_GET['tag_id'] == '')
{
    echo "<script>window.location = 'list_tag.php'</script>";
}
else
{
    $tag_id = $_GET['tag_id'];
}
$sql = "DELETE FROM new_tag WHERE tag_id = '$tag_id'";
$result = $conn->query($sql);
if ($result) {
    echo "<script>window.location.href='list_tag.php';</script>";
}
?>