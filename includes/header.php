<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Tride的图书借阅管理系统';
}
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Tride的图书借阅管理系统</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header class="site-header">
        <div class="logo">Tride的图书借阅管理系统</div>

        <nav class="nav">
            <a href="index.php">首页</a>
            <a href="books.php">图书浏览</a>
            <a href="login.php">登入</a>
            <a href="register.php">注册</a>
            <a href="about.php">说明</a>
        </nav>
    </header>
