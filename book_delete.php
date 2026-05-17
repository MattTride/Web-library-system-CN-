<?php
require_once 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('请求方式不正确');
}

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

if ($id <= 0){
    die('图书id不正确');
}

$stmt = $pdo->prepare('DELETE FROM books WHERE id = ?');
$stmt->execute([$id]);

header('Location: books.php');
exit;
?>