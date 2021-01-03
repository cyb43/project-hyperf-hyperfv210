^2_3^ 2workroom3工作室
--
由于 Hyperf 内置协程服务器，意味着 Hyperf 将以 CLI 的形式去运行。
--
--
一、常用命令
1、启动服务
$ php bin/hyperf.php start
--
2、web服务访问
当 Console 界面显示服务启动后便可通过 cURL 或 浏览器 对服务正常发起访问。如 http://127.0.0.1:9501/index/info?id=1，其中访问路由根据路由定义或路由注册规则进行访问。
--
--
二、问题解决
--
1、swoole简称(短名字)启用引起启动报错
//// 命令：
php bin/hyperf.php start
//
//// 错误：
ERROR Swoole short name have to disable before start server, please set swoole.use_shortname = off into your php.ini.
//
//// 解决：
// php.ini路径查找命令
php --ini //如/usr/local/etc/php/7.4/php.ini
cd /usr/local/etc/php/7.4/
cp php.ini php.ini.bk20201230
vim php.ini
swoole.use_shortname = "Off" //如果没有，则加上配置
--
2、"php bin/hyperf.php start"启动报错
命令：php bin/hyperf.php start
报错：failed to listen server port[0.0.0.0:9501], Error: Address already in use[48]
端口查看：lsof -i:9501
杀掉进程：kill -9 'PID'
--
--
--