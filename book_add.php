<?php
$pageTitle = '新增图书';
require_once 'includes/db.php';

$message = '';
$error = '';

$title = '';
$author = '';
$category = '';
$stock = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = trim($_POST['title'] ?? '');
    $author = trim($_POST['author'] ?? '');
    $category = trim($_POST['category'] ?? '');
    $stock = trim($_POST['stock'] ?? '');

    if ($title == '' || $author == '' || $category == '' || $stock == '') {
        $error = '请输入完整的图书信息';
    } elseif (!is_numeric($stock) || (int)$stock < 0){
        $error = '库存数量必须>=0!';
    }else {
        $stmt = $pdo->prepare('INSERT INTO books (title, author, category, stock) VALUES(?, ?, ?, ?)');
        $stmt->execute([$title, $author, $category, (int)$stock]);

        $message = '图书添加成功！';

        $title = '';
        $author = '';
        $category = '';
        $stock = '';
    }
}

require 'includes/header.php';
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
        <?php if ($message != ''): ?>
            <p class="form-tip"><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>

        <?php if ($error != ''): ?>
            <p class="form-tip"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <form class="form-card" action="book_add.php" method="post">
            <label for="title">图书名称</label>
            <input type="text" id="title" name="title" placeholder="请输入图书名称" value="<?php echo htmlspecialchars($title); ?>">

            <label for="author">作者</label>
            <input type="text" id="author" name="author" placeholder="请输入作者" value="<?php echo htmlspecialchars($author); ?>">

            <label for="category">分类</label>
            <input type="text" id="category" name="category" placeholder="例如：前端开发" value="<?php echo htmlspecialchars($category); ?>">

            <label for="stock">库存数量</label>
            <input type="number" id="stock" name="stock" placeholder="请输入库存数量" value="<?php echo htmlspecialchars($stock); ?>">

            <button class="btn primary" type="submit">保存图书</button>

        </form>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?> 