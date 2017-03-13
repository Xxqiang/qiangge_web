CREATE DATABASE IF NOT EXISTS qiangge;
USE qiangge;

-- 网站基础信息
DROP TABLE IF EXISTS qiangge_main;
CREATE TABLE qiangge_main(
title varchar(50) not null,
nich_name varchar(50) not null,
signature text not null,
about_me text not null,
phone varchar(30) not null,
e_mail varchar(50) not null
);

-- 管理员表
DROP TABLE IF EXISTS qiangge_admin;
CREATE TABLE qiangge_admin(
id int unsigned auto_increment key,
username varchar(20) not null unique,
password char(32) not null,
e_mail varchar(50) not null
);

-- 分类表
DROP TABLE IF EXISTS qiangge_cate;
CREATE TABLE qiangge_cate(
id smallint unsigned auto_increment key,
cName varchar(50) UNIQUE
);

-- 文章表
DROP TABLE IF EXISTS qiangge_article;
CREATE TABLE qiangge_article(
id int unsigned auto_increment key,
title varchar(50) not null unique,
cate varchar(50) not null,
author varchar(50),
createtime int unsigned not null,
brief_introduction text not null,
mText text not null,
pImg varchar(50) not null
);

-- 用户表
DROP TABLE IF EXISTS qiangge_user;
CREATE TABLE qiangge_user(
id int unsigned auto_increment key,
username varchar(20) not null unique,
password char(32) not null,
sex enum("男","女","保密") not null default "保密",
face varchar(50) not null,
regTime int unsigned not null
);

-- 相册表
DROP TABLE IF EXISTS qiangge_album;
CREATE TABLE qiangge_album(
id int unsigned auto_increment key,
pid int unsigned not null,
albumPath varchar(50) not null
);

-- 友情互连
DROP TABLE IF EXISTS qiangge_myfriend;
CREATE TABLE qiangge_myfriend(
id int unsigned auto_increment key,
message varchar(50) not null,
url varchar(100) not null
);




