
## xhgui汉化版增加登录

xhgui的安装信息可到源项目查看文档：[xhgui](https://github.com/perftools/xhgui) 

### 界面截图

登录页面
![登录页截图](https://raw.githubusercontent.com/ybc429710096/xhgui/master/webroot/img/qq_login.png)

首页截图
![首页截图](https://github.com/laynefyc/xhgui-branch/raw/screenshot/screenshot/homepage.png)

瀑布图
![瀑布图](https://github.com/laynefyc/xhgui-branch/raw/screenshot/screenshot/waterfall.png)

函数监控图
![函数监控图](https://github.com/laynefyc/xhgui-branch/raw/screenshot/screenshot/view-function.png)
	
### 更新日志
1. 优化收集信息代码为异步执行，加快服务器响应速度(仅对php-fpm方式有效);
2. 增加登录验证;

### 登录配置
配置文件位置：config/config.default.php

```php
    //用户信息
    'admin.user' => array(
        //user => password
        'admin' => '429710096'
    ),
```






