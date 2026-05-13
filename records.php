<?php
$pageTitle = '借阅记录';
require_once 'includes/header.php';
?>

<main class="home">
    <section class="hero">
        <p class="eyebrow">借阅记录</p>
        <h1>查看图书借阅和归还情况</h1>
        <p class="intro">
            本页面用于展示用户的借阅历史。后续连接数据库后，记录会从借阅记录表中读取。
        </p>

        <div class="hero-buttons">
            <a class="btn primary" href="books.php">继续借阅</a>
            <a class="btn secondary" href="download_records.php">下载记录</a>
        </div>
    </section>

    <section class="table-section">
        <table class="record-table">
            <thead>
                <tr>
                    <th>图书名称</th>
                    <th>借阅人</th>
                    <th>借阅日期</th>
                    <th>归还日期</th>
                    <th>状态</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>网络安全等级保护</td>
                    <td>演示用户</td>
                    <td>2026-05-01</td>
                    <td>2026-05-10</td>
                    <td>已归还</td>
                </tr>
                <tr>
                    <td>Web开发与安全</td>
                    <td>演示用户</td>
                    <td>2026-05-08</td>
                    <td>未归还</td>
                    <td>借阅中</td>
                </tr>
            </tbody>

        </table>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?>
