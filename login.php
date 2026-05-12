<?php
$pageTitle = '用户登录';
require_once 'includes/header.php'
?>

<main class="home">
    <section class="hero">
        <p class="eyebrow">用户登入</p>
        <h1>登入管理你的借阅记录</h1>
        <p class="intro">
            用户登录之后可以借阅图书，归还图书，查看自己的借阅记录；管理员登入之后还可以管理图书信息。
        </p>
    </section>

    <section class="form-section">
        <form class="form-card" action="login.php" method="post">
            <label for="username">用户名</label>
            <input type="text" id="username" name="username" placeholder="请输入用户名">

            <label for="password">密码</label>
            <input type="password" id="password" name="password" placeholder="请输入密码">

            <button class="btn primary" type="submit">登入</button>

            <p class="form-tip">
                还没有账号？<a href="register.php">去注册</a>
            </p>
            
        </form>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?>