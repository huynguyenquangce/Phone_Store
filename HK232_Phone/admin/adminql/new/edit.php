<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
    ?>
<?php
if (!isset($_GET['new_id']) || $_GET['new_id'] == '') {
    echo "<script>window.location = 'list.php'</script>";
} else {
    $new_id = $_GET['new_id'];
}
$sql = "SELECT * FROM new WHERE new_id = '$new_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_title = $_POST['new_title'];
    $new_tag = $_POST['new_tag'];
    $time = new DateTime("now", new DateTimeZone('Asia/Ho_Chi_Minh'));
    $date = $time->format('Y-m-d');
    $new_content = $_POST['content'];
    $imgName = $_FILES["thumbnail"]["name"];
    $tmpname = $_FILES["thumbnail"]["tmp_name"];
    $des = "./thumbnail/" . $imgName;
    move_uploaded_file($tmpname, $des);
    $sql_update = "UPDATE new SET new_title= '$new_title', new_tag='$new_tag', date='$date',new_img='$des', new_content='$new_content' WHERE new_id = '$new_id'";
    $result1 = $conn->query($sql_update);
    if ($result1) {
        echo "<script>window.location.href='list.php';</script>";
    }
}
?>
<div class="col py-3">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="h2 text-primary p-4 row">Edit New:</div>
            <label for="new_title" class="fw-bold">Tên bài viết</label>
            <input required type="text" class="form-control mt-2" id="new_title" placeholder="Nhập tên bài viết"
                name="new_title" value="<?php echo $row['new_title'] ?>">
            <label for="new_tag mt-3" class="fw-bold">Thương hiệu:</label>
            <select class="form-control mt-2" name="new_tag" required>
                <option value="">-- Chọn tag cho bài viết --</option>
                <option selected value="<?php echo $row['new_tag']; ?>"><?php echo $row['new_tag']; ?></option>
            </select>
            <label for="content" class="fw-bold mt-3">Nội dung bài viết:</label>
            <textarea id="editor" name="content"><?php echo $row['new_content']; ?>
            </textarea>
            <label for="new_img" class="fw-bold mt-3">Ảnh bài viết:</label>
            <input type="file" name="thumbnail" id="thumbnail">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Chỉnh sửa bài viết</button>
    </form>
</div>
</div>
</div>
</main>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ],

        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        image_title: true,

        automatic_uploads: true,

        file_picker_types: 'image',
        /* and here's our custom image picker*/
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');


            input.onchange = function () {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function () {

                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
            };

            input.click();
        },
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>
</body>

</html>