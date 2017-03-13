<?php
require_once('lib/mysql_func.php');
// require_once('../www.qiangge666.me/lib/mysql_func.php');
$link=connect();
$sql="SELECT * FROM `qiangge_main`";
$row=fetchOne($sql,$link);
$sql="SELECT * FROM `qiangge_myfriend`";
$rows=fetchAll($link, $sql);
mysqli_close($link);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $row["title"]?></title>
<meta name="keywords" content="强哥,兴强君,兴强君的博客" />
<meta name="description" content="兴强君个人博客，分享、快乐。" />
<link href="css/base.css" rel="stylesheet">
<link href="css/about.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<div class="ibody">
  <header>
    <h1><?php echo $row['nich_name']?></h1>
    <h2><?php echo $row['signature']?></h2>
    <div class="logo"><a href="index.php"></a></div>
    <nav id="topnav"><a href="index.php">首页</a><a href="about.php">关于我</a><a href="share.php">技术分享</a><a href="new.php">杂文分享</a><a href="visitor.php">访客</a></nav>
  </header>
  <article>
    <h3 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">关于我</a></h3>
    <div class="about">
      <h2>Just about me</h2>
      <ul>
       <p><?php echo $row["about_me"]?></p>
      </ul>
      <h2>About my blog</h2>
      <ul class="blog_a">
        <p>域  名：www.qiangge666.me 创建于2016年12月6日 <a href="http://www.net.cn/domain/" class="blog_link" target="_blank">注册域名</a><a class="blog_link" href="http://koubei.baidu.com/womc/s/www.yangqq.com" target="_blank">邀你点评</a></p>
        <p>服务器：阿里云服务器<a href="http://www.aliyun.com/product/ecs/?ali_trackid=2:mm_11085263_4976026_15602229:1389838528_3k2_34164590" class="blog_link" target="_blank">购买空间</a><a href="/jstt/web/2014-01-18/644.html" target="_blank" class="blog_link" >参考我的空间配置</a></p>
        <p>程  序：YUAN 帝国CMS7.0</p>
        <p>微信公众号：wwwqiangge666me</p>
      </ul>
    </div>
  </article>
  <aside>
    <div class="avatar"><a href="about.php"><span>关于<?php echo $row["nich_name"]?></span></a></div>
    <div class="topspaceinfo">
      <h1><?php echo $row['nich_name']?></h1>
      <p><?php echo $row["signature"]?></p>
    </div>
    <div class="about_c">
      <p>网名：同学少年 | 夏天不热</p>
      <p>职业：Web前端设计师、网页设计 </p>
      <p>籍贯：云南省―曲靖市</p>
      <p>电话：13062304334</p>
      <p>邮箱：2631825347@qq.com</p>
      <p><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=2631825347@qq.com" ><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png" alt="兴强个人博客网站"></a></p>
    </div>
  </aside>
  <script src="js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 -->
</div>
</body>
</html>
