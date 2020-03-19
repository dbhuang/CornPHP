# CornPHP
基于swoole封装的PHP框架

## 基于Composer的文件引入，遵循PSR-4规则
```
# composer init

# Package name (<vendor>/<name>) [administrator/corn-php]: dbhuang/cron-php
# Description []:This is a PHP learning framework based on swoole
# Author [, n to skip]: dbhuang <1016516927@qq.com>

# 其余回车

{
    "name": "dbhuang/cron-php",
    "description": "This is a PHP learning framework based on swoole",
    "type": "project",
    "authors": [
        {
            "name": "dbhuang",
            "email": "1016516927@qq.com"
        }
    ],
    "require": {}
}

在composer.json添加autoload相关配置，然后执行composer dump-autoload使其生效
    "autoload": {
        "psr-4": {
            "Core\\": "Core",
            "Application\\": "Application"
        }
    }



配置好Core和Application两个命名空间极其对应目录
在bin/cron.php引入vender中的autoload.php实现自动文件引入

```