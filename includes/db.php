<?php
$socket = '/Applications/ServBay/tmp/mysql-8.4.sock';
$dbname = 'library_lite';
$username = 'root';
$password = 'ServBay.dev';

try {
    $pdo = new PDO("mysql:unix_socket=$socket;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('数据库连接失败：' . $e->getMessage());
}
?>
