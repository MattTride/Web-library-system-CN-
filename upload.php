<?php
$pageTitle = '资料上传';
require_once 'includes/header.php';
?>

<main class="home">
    <section class="hero">
        <p class="eyebrow">资料上传</p>
        <h1>上传图书封面和资料</h1>
        <p class="intro">
            本页面用于练习文件上传功能。后续会限制文件类型和大小，避免上传危险文件。
        </p>
    </section>

    <section class="form-section">
        <form class="form-card" action="upload.php" method="post" enctype="multipart/form-data">
            <label for="file_title">资料名称</label>
            <input type="text" id="file_title" name="file_title" placeholder="请输入资料名">

            <label for="upload_file">选择文件</label>
            <input type="file" id="upload_file" name="upload_file">

            <button class="btn primary" type="submit">上传文件</button>

            <p class="form-tip">
                建议上传jpg·png·pdf或txt文件。
            </p>
        </form>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?>