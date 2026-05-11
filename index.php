<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tride的图书借阅管理系统</title>
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

    <main class="home">
        <section class="hero">
            <p class="eyebrow">Web大作业</p>
            <h1>一个简单的图书借阅管理系统😄</h1>
            <p class="intro">
                本网站主要用来进行图书管理信息，用户借阅记录和资料上传，包括登入注册，增删改查，借阅归还，记录下载等功能。
            </p>

            <div class="hero-buttons">
                <a class="btn primary" href="books.php">浏览图书</a>
                <a class="btn secondary" href="login.php">用户登入</a>
            </div>
        </section>

        <section class="features">
            <div class="features_card">
                <h2>图书管理</h2>
                <p>管理员可以增加，修改，删除图书的信息</p>
            </div>

            <div class="features_card">
                <h2>用户借阅记录</h2>
                <p>用户可以借阅，归还图书。并可以查看自己的借阅记录</p>
            </div>

            <div class="features-card">
                <h2>安全开发</h2>
                <p>系统会使用登入验证，表单校验和数据库预处理来提高安全性</p>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <p>Web大作业-Tride的图书借阅管理系统 &copy; Matt Tride 2026</p>
    </footer>




</body>
</html>