
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
<link href="css/style.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<style type='text/css'>
.Qt{width: 100%,height:100%;padding: 20px;font-size: 15px;font-kerning: normal;line-height: 30px;padding-bottom:  100px;}

.Qt h2,.Qt h3,.Qt h4,.Qt h5,.Qt h6{margin-top: 20px;margin-bottom: 10px;font-weight: normal; font-size: 20px;font-family:"Microsoft Yahei", Arial, Helvetica, sans-serif;  }
.Qt h1{font-weight: normal; font-size: 30px;font-family:"Microsoft Yahei", Arial, Helvetica, sans-serif;text-align: center;margin-top: 20px ;padding-bottom:20px;}
.Qt a{color: #00acff;padding-top:40px;}
.Qt li{list-style-image:url(images/li.jpg);padding-left: 5px;margin-left: 20px }
.Qt image{list-style-image: center}
</style>
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
<h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">访客</a>></h2>

</article>
<aside>
<div class="rnav">
<li class="rnav1 "><a href="/">我的评价</a></li>
<li class="rnav2 "><a href="/">我的访问</a></li>
<li class="rnav3 "><a href="/">我的设置</a></li>
</div>
<div class="ph_news">
<h2>

<h2>
<p>最新评论</p>
</h2>
<ul class="pl_n">
<dl>
<dt><img src="images/s8.jpg"> </dt>
<dt> </dt>
<dd>DanceSmile
<time>49分钟前</time>
</dd>
<dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
</dl>
<dl>
<dt><img src="images/s7.jpg"> </dt>
<dt> </dt>
<dd>yisa
<time>2小时前</time>
</dd>
<dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
</dl>
<dl>
<dt><img src="images/s6.jpg"> </dt>
<dt> </dt>
<dd>小林博客
<time>8月7日</time>
</dd>
<dd><a href="/">博客色彩丰富，很是好看</a></dd>
</dl>
<dl>
<dt><img src="images/003.jpg"> </dt>
<dt> </dt>
<dd>DanceSmile
<time>49分钟前</time>
</dd>
<dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
</dl>
<dl>
<dt><img src="images/002.jpg"> </dt>
<dt> </dt>
<dd>yisa
<time>2小时前</time>
</dd>
<dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
</dl>
</ul>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
      <?php foreach ($rows as $row1):?>
        <li><a href=<?php echo "http://".$row1["url"]?>><?php echo $row1["message"]?></a></li>
        <?php endforeach;?>
      </ul>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">DanceSmile</a></p>
        <p>蜀ICP备11002373号-1</p>
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
