<?php
$pageTitle = '新增图书';
require_once 'includes/header.php';
?>

<main class="home">
    <section class="hero">
        <p class="eyebrow">图书管理</p>
        <h1>新增一本图书</h1>
        <p class="intro">
            管理员可以在这里录入新的图书信息。后续连接数据库后，提交的内容会保存到图书表中。
</p>
    </section>

    <section class="form-section">
        <form class="form-card" action="book_add.php" method="post">
            <label for="title">图书名称</label>
            <input type="text" id="title" name="title" placeholder="请输入图书名称">

            <label for="author">作者</label>
            <input type="text" id="author" name="author" placeholder="请输入作者">

            <label for="category">分类</label>
            <input type="text" id="category" name="category" placeholder="例如：前端开发">

            <label for="stock">库存数量</label>
            <input type="number" id="stock" name="stock" placeholder="请输入库存数量">

            <button class="btn primary" type="submit">保存图书</button>

        </form>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?> 