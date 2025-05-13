<?php

$debug_mode = true; // 上线后改为false
if ($debug_mode) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}

require __DIR__ . '/includes/db_connect.php';
session_start();

// 验证请求方法
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("HTTP/1.1 405 Method Not Allowed");
    exit("仅允许POST方法");
}

// CSRF令牌验证
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("安全令牌验证失败");
}

// 数据过滤与验证
$author = trim(filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW));
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$comment = trim(filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW));
$comment = substr($comment, 0, 1000);
$parentId = isset($_POST['parent_id']) ? (int)$_POST['parent_id'] : null;

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
    // 父评论验证逻辑
    $parentDepth = 0;
    $parentAvatarId = null;

    if ($parentId) {
        $stmt = $pdo->prepare("SELECT depth, avatar_id FROM comments WHERE id = ?");
        $stmt->execute([$parentId]);
        $parentData = $stmt->fetch();

        if (!$parentData) {
            throw new Exception("父评论不存在或已被删除");
        }

        if ($parentData['depth'] >= 3) {
            throw new Exception("最多只能回复到第三层");
        }

        $parentDepth = $parentData['depth'];
        $parentAvatarId = $parentData['avatar_id'];
    }

    // 插入评论
    $stmt = $pdo->prepare("INSERT INTO comments 
        (author, email, content, parent_id, depth, avatar_id)
        VALUES (?, ?, ?, ?, ?, ?)");

    $insertData = [
        $author,
        $email,
        $comment,
        $parentId,
        $parentId ? ($parentDepth + 1) : 0,
        rand(1,10)
    ];

    $stmt->execute($insertData);

    $_SESSION['comment_success'] = true;
    header("Location: " . $_SERVER['HTTP_REFERER'] . "#comment-" . $pdo->lastInsertId());
    exit();

} catch (Exception $e) {
    error_log($e->getMessage());
    $_SESSION['comment_errors'] = [$e->getMessage()];
    $_SESSION['form_data'] = $_POST;
    header("Location: " . $_SERVER['HTTP_REFERER'] . "#comment-form");
    exit();
}