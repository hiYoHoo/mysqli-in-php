# mysqli-in-php
## **mysqli常用方法**
- 创建mysqli对象，连接数据库
    ```
    $mysqli = new mysqli(hostname, user, password [, dbname]);
    ```
- 选择用于数据库查询的默认数据库
    ```
    $mysqli->select_db($dbname);
    ```
- 设置客户端编码方式
    ```
    $mysqli->set_charset($charset);
    ```
- 执行sql语句，查询数据库
    ```
    $mysqli->query($query);
    ```
- 执行多条sql语句
    ```
    $mysqli->multi_query($query);
    ```
- 关闭数据库连接
    ```
    $mysqli->close();
    ```
- 数据库连接错误编号和错误信息
    ```
    $mysqli->connect_errno;
    $mysqli->connect_error;
    ```
- 查询数据库错误编号和错误信息
    ```
    $mysqli->errno;
    $mysqli->error;
    ```
- 查询数据库影响条数
    ```
    $mysqli->affected_rows;
    ```
- 准备执行预处理语句
    ```
    $mysqli_stmt=$mysqli->prepare($query);
    ```
- 为mysqli_stmt对象绑定参数
    ```
    $mysqli_stmt->bind_param($type, $parmas);
    ```
- 执行预处理语句
    ```
    $mysqli_stmt->execute();
    ```
- 开启或关闭命令自动提交
    ```
    $mysqli->autocommit(TRUE/FALSE);
    ```
- 提交之前未提交的命令
    ```
    $mysqli->commit();
    ```
- 取消未提交的命令
    ```
    $mysqli->rollback();
    ```
## **SQL基本语法**
- 如果不存在则创建数据库
    ```
    create database if not exists dbname;
    ```
- 如果存在则删除数据库
    ```
    drop database if exists dbname;
    ```
- 列出所有数据库
    ```
    show databases;
    ```
- 选择数据库
    ```
    use dbname;
    ```
- 如果不存在则创建表（示例）
    ```
    create table if not exists users(
        id tinyint unsigned auto_increment key,
        name varchar(20) not null unique,
        gender char(1) not null,
        age tinyint(3) unsigned not null,
        nationality varchar(50) default '汉族',
        money float(8,2) unsigned default 1000.00
    ) engine=myisam default charset=utf8;
    ```
- 如果存在则删除表
    ```
    drop table if exists tablename;
    ```
- 列出当前数据库中的所有表
    ```
    show tables;
    ```
- 查看创建表的命令
    ```
    show create table tablename;
    ```
- 查看表结构
    ```
    desc tablename;
    ```
- 插入数据
    ```
    insert tablename(key1,key2,...) values(), (), ...();
    ```
- 更新数据
    ```
    update tablename set [...] where [...];
    ```
- 删除数据
    ```
    delete from tablename where [...];
    ```
- 查询数据
    ```
    select [key1,key2,...] from tablename where [...];
    ```
