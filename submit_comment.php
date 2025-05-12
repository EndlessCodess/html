<?php

$debug_mode = true; // false
if ($debug_mode) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}

require __DIR__ . '/includes/db_connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("HTTP/1.1 405 Method Not Allowed");
    exit("仅允许POST方法");
}

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("安全令牌验证失败");
}

$avatar_id = rand(1, 10);
$author = trim(filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW));
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$comment = trim(filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW));
$comment = substr($comment, 0, 1000);

$errors = [];
if (empty($author) || strlen($author) > 50) {
    $errors[] = "姓名需在1-50字符内";
}
if (!$email || !preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/', $_POST['email'])) {
    $errors[] = "邮箱格式无效";
}
if (empty($comment) || strlen($comment) < 5) {
    $errors[] = "评论内容需至少5个字符";
}

if (!empty($errors)) {
    $_SESSION['comment_errors'] = $errors;
    $_SESSION['form_data'] = $_POST;
    header("Location: " . $_SERVER['HTTP_REFERER'] . "#comment-form");
    exit();
}

try {
    $stmt = $pdo->prepare("INSERT INTO comments (author, email, content, avatar_id) VALUES (?, ?, ?, ?)");
    $stmt->execute([$author, $email, $comment, $avatar_id]);

    $_SESSION['comment_success'] = true;
    header("Location: " . $_SERVER['HTTP_REFERER'] . "#comments");
    exit();
} catch (PDOException $e) {
    header("HTTP/1.1 500 Internal Server Error");
    exit();
}
?>