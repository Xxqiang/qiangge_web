<?php
require_once('lib/mysql_func.php');
$link=connect();
$sql="SELECT * FROM `qiangge_main`";
$row=fetchOne($sql,$link);
$sql="SELECT * FROM `qiangge_myfriend`";
$rows=fetchAll($link, $sql);
$sql="SELECT * FROM `qiangge_article` where cate='杂文'";
$a_row=fetchOne($sql, $link);
$sql="SELECT id,title FROM `qiangge_article` where cate='杂文'";
$other_rows=fetchAll($link, $sql);
mysqli_close($link);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $row["title"]?></title>
<meta name="keywords" content=<?php echo $a_row['title']?>/>
<meta name="description" content=<?php echo $a_row['title']?> />
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
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">杂文分享</a>></h2>
    <div class="Qt">
    <h1><?php echo $a_row['title']?></h1>
    <p class="box_c"><span class="d_time">发布时间：<?php echo $a_row['createtime']?></span><span>编辑：<?php $a_row['author']?></span><span>浏览（390）</span><span>评论览（14）</span></p>
<p>概要：<?php echo $a_row['brief_introduction']?></p>
<?php echo $a_row['mText']?>
</div>
      <div class="nextinfo">
        <p>上一篇：<a href="makedown.html">markdown让你优雅装逼，静静地码字</a></p>
        <p>下一篇：<a href="/news/s/2013-10-21/616.html">柴米油盐的生活才是真实</a></p>
      </div>
  </article>
  <aside>
    <div class="rnav">
      <li class="rnav1 "><a href="">日记</a></li>
      <li class="rnav2 "><a href="">欣赏</a></li>
      <li class="rnav3 "><a href="">程序人生</a></li>
      <li class="rnav4 "><a href="">经典语录</a></li>
    </div>
    <div class="ph_news">
      <h2>
        <p>杂文列表</p>
      </h2>
      <ul class="ph_n">
      <?php foreach ($other_rows as $other_row):?>
        <li><span class="num1">1</span><a href="getDetail.php?id=<?php echo $other_row['id']?>"><?php echo $other_row['title']?></a></li>
       <?php endforeach;?>
      </ul>
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
