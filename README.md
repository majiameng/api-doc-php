# Api-Doc-PHP

### 主要功能：

+ 根据接口注释自动生成接口文档

### 演示地址

[【Gitee Pages:】https://gitee.com/majiameng/api-doc-php](https://gitee.com/majiameng/api-doc-php)

### 开源地址：

[【GigHub:】https://github.com/majiameng/api-doc-php](https://github.com/majiameng/api-doc-php)
    
### 扩展安装：

+ 方法一：composer命令 `composer require tinymeng/api-doc-php  dev-master`

+ 方法二：直接下载压缩包，然后进入项目中执行 composer命令 `composer update` 来生成自动加载文件

### 引用扩展：

+ 当你的项目不支持composer自动加载时，可以使用以下方式来引用该扩展包

```
// 引入扩展（具体路径请根据你的目录结构自行修改）
require_once __DIR__ . '/vendor/autoload.php';
```

### 使用扩展：

```
// 引入扩展（具体路径请根据你的目录结构自行修改）
require_once __DIR__ . '/../vendor/autoload.php';
// 加载测试API类1
require_once __DIR__ . '/Api.php';
// 加载测试API类2
require_once __DIR__ . '/Api2.php'; 
$config = [
    'class'         => ['Api', 'Api2'], // 要生成文档的类
    'filter_method' => ['__construct'], // 要过滤的方法名称
];
$api = new \tinymeng\apidoc\BootstrapApiDoc($config);
$doc = $api->getHtml();
exit($doc);
```

访问：http://localhost/index/doc即可访问到文档

> 注意：Api.php控制器的方法里一定要有title，method等参数说明用来给文档提示说明文字，如果无，会报错

2、Api.php案例代码：

```php
namespace app\index\controller;

use think\App;
use think\Controller;
use think\Db;

/**
 * @title API接口
 * @desc API接口
 * Class APi
 * @package app\index\controller
 */
class Api extends Controller
{
    /**
     * @title 获取所有栏目
     * @url /index/api/homecategory
     * @method POST
     * @code 200 成功
     * @code 201 失败
     * @return int status 状态码 （具体参见状态码说明）
     * @return string msg 提示信息
     */
    public function homecategory()
    {
        //... 你的代码
    }
}
```

### 具体效果可运行test目录下的`index.php`查看
