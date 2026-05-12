<?php
$pageTitle = '用户注册';
require_once 'includes/header.php';
?>

<main class="home">
    <section class="hero">
        <p class="eyebrow">用户注册</p>
        <h1>创建一个新的借阅账号</h1>
        <p class="intro">
            注册后可以作为普通用户浏览图书、借阅图书，并查看自己的借阅记录。
        </p>
    </section>

    <section class="form-section">
        <form class="form-card" action="register.php" method="post">
            <label for="username">用户名</label>
            <input type="text" id="username" name="username" placeholder="请输入用户名">

            <label for="password">密码</label>
            <input type="password" id="password" name="password" placeholder="请输入密码">

            <label for="confirm_password">确认密码</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="请再次输入密码">

            <button class="btn primary" type="submit">注册</button>

            <p class="form-tip">
                已经有了账号吗？<a href="login.php">去登录</a>
            </p>
        </form>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?>