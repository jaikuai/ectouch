<?php

namespace think;

// 加载基础文件
require __DIR__ . '/../vendor/topthink/framework/base.php';

// 执行应用
$app = Container::get('app');

// 响应
return $app;