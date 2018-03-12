<?php

// 加载基础文件
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 执行应用并响应
$app->run()->send();
