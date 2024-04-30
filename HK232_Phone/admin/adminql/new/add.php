<?php
include "../header.php";
include "../sidebar_left.php";
include "../../../connectDB.php"
    ?>
<?php
$tag_query = "SELECT * FROM new_tag";
$row = $conn->query($tag_query);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_title = $_POST['new_title'];
    $new_tag = $_POST['new_tag'];
    $time = new DateTime("now", new DateTimeZone('Asia/Ho_Chi_Minh') );
    $date = $time ->format('Y-m-d');
    $new_content = mysqli_real_escape_string($conn,$_POST['content']);
    $imgName = $_FILES["thumbnail"]["name"];
    $tmpname = $_FILES["thumbnail"]["tmp_name"];
    $des = "./thumbnail/".$imgName;
    move_uploaded_file($tmpname, $des);
    $sql = "INSERT INTO new (new_title,new_tag,new_img,new_content,date) VALUES ('$new_title','$new_tag','$des','$new_content','$date')";
    $result = $conn->query($sql);
    if ($result) {
        echo "<script>window.location.href='list.php';</script>";
    }
}
?>
<div class="col py-3">
    <form action="add.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="h2 text-primary p-4 row">Add New:</div>
            <label for="new_title" class="fw-bold">Tên bài viết</label>
            <input required type="text" class="form-control mt-2" id="new_title" placeholder="Nhập tên bài viết"
                name="new_title">
            <label for="new_tag mt-3" class="fw-bold">Thương hiệu:</label>
            <select class="form-control mt-2" name="new_tag" required>
                <option value="">-- Chọn tag cho bài viết --</option>
                <?php while ($tag_row = mysqli_fetch_assoc($row)) { ?>
                    <option value="<?php echo $tag_row['tag_name']; ?>"><?php echo $tag_row['tag_name']; ?></option>
                <?php } ?>
            </select>
            <label for="content" class="fw-bold mt-3">Nội dung bài viết:</label>
            <textarea id="editor" name="content">
            </textarea>
            <label for="new_img" class="fw-bold mt-3">Ảnh bài viết:</label>
            <input type="file" name="thumbnail" id="thumbnail">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Đăng bài viết</button>
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