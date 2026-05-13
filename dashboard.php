<?php
$pageTitle = '用户控制台';
require_once 'includes/header.php';
?>

<main class="home">
    <section class="hero">
        <p class="eyebrow">用户控制台</p>
        <h1>管理图书和借阅信息</h1>
        <p class="intro">
            这里是用户登录后的首页。普通用户可以查看借阅记录，管理员可以进入图书管理功能。
        </p>

        <div class="hero-buttons">
            <a class="btn primary" href="books.php">浏览图书</a>
            <a class="btn secondary" href="records.php">我的借阅记录</a>
        </div>
    </section>

    <section class="features">
        <div class="feature-card">
            <h2>当前身份</h2>
            <p>普通用户 / 管理员</p>
            <p>后续连接登入功能后，这里会显示真实用户身份</p>
        </div>

        <div class="feature-card">
            <h2>借阅情况</h2>
            <p>当前借阅情况：0本</p>
            <p>历史借阅：0本</p>
        </div>

        <div class="feature-card">
            <h2>快捷操作</h2>
            <p><a href="book_add.php">新增图书</a></p>
            <P><a href="upload.php">上传资料</a></P>
            <p><a href="download_records.php">下载记录</a></p>
        </div>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?>
