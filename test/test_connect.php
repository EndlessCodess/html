<?php

require '../includes/db_connect.php';

try {
    // 测试查询
    $stmt = $pdo->query("SELECT NOW() AS `current_time`");
    $result = $stmt->fetch();
    
    echo "<h3 style='color: #4CAF50;'>✅ 连接成功！</h3>";
    echo "<p>数据库当前时间：".$result['current_time']."</p>";
    
    // 显示所有表（测试用）
    $tables = $pdo->query("SHOW TABLES")->fetchAll();
    echo "<p>共发现 ".count($tables)." 个数据表</p>";
    
} catch(PDOException $e) {
    echo "<h3 style='color: #f44336;'>❌ 连接错误：</h3>";
    echo "<pre>".$e->getMessage()."</pre>";
}
?>