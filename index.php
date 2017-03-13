<?php
require_once('lib/mysql_func.php');
$link=connect();
$sql="SELECT * FROM `qiangge_main`";
$row=fetchOne($sql,$link);
$sql="SELECT * FROM `qiangge_myfriend`";
$rows=fetchAll($link, $sql);
$sql="select id,title,cate,author,brief_introduction,createtime,pImg from qiangge_article limit 0,10";
$a_rows=fetchAll($link, $sql);
mysqli_close($link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $row["title"]?></title>
<meta name="keywords" content="强哥,兴强君,兴强君的博客" />
<meta name="description" content="兴强君个人博客，分享、快乐。" />
<link href="css/base.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
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
    <div class="logo"><a href="/"></a></div>
    <nav id="topnav"><a href="index.php">首页</a><a href="about.php">关于我</a><a href="share.php">技术分享</a><a href="new.php">杂文分享</a><a href="visitor.php">访客</a></nav>
  </header>
  <article>
    <div class="banner">
      <ul class="texts">
        <p>The best life is use of willing attitude, a happy-go-lucky life. </p>
        <p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>
      </ul>
    </div>
    <div class="bloglist">
      <h2>
        <p><span>推荐</span>文章</p>
      </h2>
      <?php foreach ($a_rows as $a_row):?>
      <div class="blogs">
        <h3><a href="getDetail.php?id=<?php echo $a_row['id']?>"><?php echo $a_row['title'];?></a></h3>
        <figure><img src="test/upload/<?php echo $a_row['pImg'];?>" ></figure>
        <ul>
          <p><?php echo $a_row['brief_introduction'];?></p>
          <a href="getDetail.php?id=<?php echo $a_row['id']?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：<?php echo $a_row['author'];?></span><span>分类：<?php echo $a_row['cate'];?>】</span><span>浏览（<a href="/">459</a>）</span><span>评论（<a href="/">30</a>）</span></p>
        <div class="dateview"><?php echo $a_row['createtime'];?></div>
      </div>
      <?php endforeach;?>
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
      <p>电话：<?php echo $row['phone']?></p>
      <p>邮箱：<?php echo $row['e_mail']?></p>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
      <?php foreach ($a_rows as $a_row):?>
        <li><a href="getDetail.php?id=<?php echo $a_row['id']?>"><?php echo $a_row['title'];?></a></li>
        <?php endforeach;?>
      </ul>
    </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
      <?php foreach ($rows as $row1):?>
        <li> <a href=<?php echo "http://".$row1["url"]?>><?php echo $row1["message"]?></a></li>
        <?php endforeach;?>
      </ul>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">QiangSir</a></p>
        <p>cqu university</p>
        </p>
      </ul>
    </div>
  </aside>
  <script src="js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 -->
</div>
</body>
</html>
