<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/Api.php'; // 加载测试API类1
require_once __DIR__ . '/Api2.php'; // 加载测试API类2
$config = [
    'class'         => ['Api', 'Api2'], // 要生成文档的类
    'filter_method' => ['__construct'], // 要过滤的方法名称
];
$api = new \tinymeng\apidoc\BootstrapApiDoc($config);
$doc = $api->getHtml();
exit($doc);

