<?php
// 数据库配置
$host = 'localhost';
$dbname = 'cqhlbx';
$user = 'cqhlbx';
$pass = '12345678';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("数据库连接失败: " . $e->getMessage());
}
?>