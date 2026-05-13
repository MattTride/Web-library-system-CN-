<?php
$pageTitle = '下载记录';
require_once 'includes/header.php';
?>

<main class="home">
    <section class="hero">
        <p class="eyebrow">下载记录</p>
        <h1>导出借阅记录</h1>
        <p class="intro">
            本页面用于下载借阅记录，后续连接数据库后会把记录导出为 CSV 文件。
        </p>

        <div class="hero-buttons">
            <a class="btn primary" href="records.php">返回记录页面</a>
            <a class="btn secondary" href="#">下载 CSV 文件</a>
        </div>
    </section>

    <section class="features">
        <div class="feature-card">
            <h2>导出内容</h2>
            <p>图书名称·借阅人·借阅日期·归还日期·借阅状态</p>
        </div>

        <div class="feature-card">
            <h2>文件格式</h2>
            <p>后续使用 CSV 格式，方便用Excel打开查看</p>
        </div>

        <div class="feature-card">
            <h2>功能状态</h2>
            <p>下一阶段实现下载功能</p>
        </div>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?>