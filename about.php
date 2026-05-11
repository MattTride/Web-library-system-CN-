<?php
$pageTitle = "项目说明";
require_once 'includes/header.php';
?>

<main class="home">
    <section class="hero">
        <p class="eyebrow">项目说明</p>
        <h1>关于Tride的图书借阅管理系统</h1>
        <p class="intro">
            本项目是Web课程的大作业，主要练习 HTML、CSS、JavaScript、PHP、数据库操作和基础安全开发。
        </p>
    </section>

    <section class="features">
        <div class="feature-card">
            <h2>项目主题</h2>
            <p>
                本网站模拟一个小型图书馆的基本业务流程。
            </p>
        </div>

        <div class="feature-card">
            <h2>主要功能</h2>
            <p>
                网站计划实现用户注册登录、图书浏览、图书增删改查、借阅归还、资料上传、
                借阅记录下载等功能，同时满足对数据库操作的要求。
            </p>
        </div>

        <div class="feature-card">
            <h2>安全设计</h2>
            <p>
                后续开发中会增加登录验证、表单校验、密码加密、数据库预处理和上传文件限制等安全措施。
            </p>
        </div>
    </section>
</main>

<?php
require_once 'includes/footer.php';
?>
