<?php
$pageTitle = '图书浏览';
require_once 'includes/db.php';
require_once 'includes/header.php';
$stmt = $pdo->query('SELECT * FROM books ORDER BY id DESC');
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

    <?php if (empty($books)): ?>
        <section class="feature-card">
            <h2>暂无图书</h2>
            <p>数据库中还没有图书信息，可以先去新增图书。</p>
        </section>
    <?php else: ?>
        <section class="features">
            <?php foreach ($books as $book): ?>
                <div class="feature-card">
                    <h2><?php echo htmlspecialchars($book['title']); ?></h2>
                    <p>作者：<?php echo htmlspecialchars($book['author']); ?></p>
                    <p>分类：<?php echo htmlspecialchars($book['category']); ?></p>
                    <p>库存：<?php echo htmlspecialchars($book['stock']); ?> 本</p>

                    <div class="hero-buttons">
                        <a class="btn primary" href="borrow.php?id=<?php echo $book['id']; ?>">点击借阅</a>
                        <a class="btn secondary" href="book_edit.php?id=<?php echo $book['id']; ?>">编辑</a>

                        <form class="delete-form" action="book_delete.php" method="post" onsubmit="return confirm('确定要删除这本书吗？');">
                            <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
                            <button class="btn secondary" type="submit">删除</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    <?php endif; ?>
</main>

<?php
require_once 'includes/footer.php';
?>
