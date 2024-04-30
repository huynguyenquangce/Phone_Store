<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
    ?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tag_name = $_POST['tag_name'];
    $sql = "INSERT INTO new_tag (tag_name) VALUES ('$tag_name')";
    $result = $conn->query($sql);
    if ($result) {
        echo "<script>window.location.href='list_tag.php';</script>";
    }
}
?>
<div class="col py-3">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="h2 text-primary p-4 row">Add Tag New:</div>
            <label for="tag_name" class="fw-bold">Nhập tên Tag:</label>
            <input required type="text" class="form-control mt-2" id="tag_name" placeholder="Nhập tên tag của tin tức"
                name="tag_name">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add Tag New</button>
    </form>
</div>
</div>
</div>
</main>
</body>

</html>