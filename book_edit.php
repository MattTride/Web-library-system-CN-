<?php
$pageTitle = '编辑图书';
require 'includes/db.php';

$message = '';
$error = '';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0){
    die('图书id不正确');
}

$stmt = $pdo->prepare('SELECT * FROM books WHERE id = ?');
$stmt->execute([$id]);
$book = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$book){
    die('没有找到这本书');
}

$title = $book['title'];
$author = $book['author'];
$category = $book['category'];
$stock = $book['stock'];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = trim($_POST['title'] ?? '');
    $author = trim($_POST['author'] ?? '');
    $category = trim($_POST['category'] ?? '');
    $stock = trim($_POST['stock'] ?? '');

    if (empty($title) || empty($author) || empty($category) || empty($stock)){
        $error = '请填写完整的图书信息';
    } elseif (!is_numeric($stock) || $stock <0){
        $error = '库存必须>= 0';
    } else{
        $stmt = $pdo->prepare('UPDATE books SET title = ?, author = ?, category = ?, stock = ? WHERE id = ?');
        $stmt->execute([$title, $author, $category, (int)$stock, $id]);

        $message = '图书修改成功！';
    }
}

require 'includes/header.php';
?>

<main class="home">
    <section class="hero">
        <p class="eyebrow">图书管理</p>
        <h1>编辑图书信息</h1>
        <p class="intro">
            在这里可以修改图书名称，作者，分类和库存数量。
        </p>
    </section>

    <section class="form-section">
        <?php if ($message !== ''): ?>
            <p class="form-tip"><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>

        <?php if ($error !== ''): ?>
            <p class="form-tip"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <form class="form-card" action="book_edit.php?id=<?php echo $id; ?>" method="post">
            <label for="title">图书名称</label>
            <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>">

            <label for="author">作者</label>
            <input type="text" id="author" name="author" value="<?php echo htmlspecialchars($author); ?>">

            <label for="category">分类</label>
            <input type="text" id="category" name="category" value="<?php echo htmlspecialchars($category); ?>">

            <label for="stock">库存数量</label>
            <input type="number" id="stock" name="stock" value="<?php echo htmlspecialchars($stock); ?>">

            <button class="btn primary" type="submit">保存修改</button>
        </form>
    </section>
</main>

<?php
require 'includes/footer.php';
?>
