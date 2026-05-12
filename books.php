<?php
$pageTitle = '图书浏览';
require_once 'includes/header.php';
?>

<main class="home">
    <section class="hero">
        <p class="eyebrow">图书浏览</p>
        <h1>查看当前可借阅的图书</h1>
        <p class="intro">
            这里展示系统中的图书信息。后续连接数据库后，本页面会从数据库中读取真实图书数据。
        </p>

        <div class="hero-buttons">
            <a class="btn primary" href="book_add.php">新增图书</a>
            <a class="btn secondary" href="records.php">查看借阅记录</a>
        </div>
    </section>

    <section class="features">
        <div class="feature-card">
            <h2>网络安全等级保护</h2>
            <p>作者：网安学院</p>
            <p>分类：学习</p>
            <p>库存：3 本</p>
            <div class="hero-buttons">
                <a class="btn primary" href="borrow.php">点击借阅</a>
            </div>
        </div>

        <div class="feature-card">
            <h2>Web开发与安全</h2>
            <p>作者：计算机学院</p>
            <p>分类：前端开发</p>
            <p>库存：1 本</p>
            <div class="hero-buttons">
                <a class="btn primary" href="borrow.php">点击借阅</a>
            </div>
        </div>

        <div class="feature-card">
            <h2>PHP 与 Web 表单开发</h2>
            <p>作者：周明</p>
            <p>分类：后端基础</p>
            <p>库存：4 本</p>
            <div class="hero-buttons">
                <a class="btn primary" href="borrow.php">点击借阅</a>
            </div>
        </div>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?>
