<?php
require_once('lib/mysql_func.php');
$link=connect();
$sql="SELECT * FROM `qiangge_main`";
$row=fetchOne($sql,$link);
$sql="SELECT * FROM `qiangge_myfriend`";
$rows=fetchAll($link, $sql);
$sql="SELECT cName FROM `qiangge_cate`";
$cate_rows=fetchAll($link, $sql);
$sql="SELECT id,title FROM `qiangge_article` limit 0,9";
$title_rows=fetchAll($link, $sql);
$cate=$_REQUEST['cate'];
$sql="select id,title,cate,author,brief_introduction,createtime,pImg from qiangge_article where cate='{$cate}'";
$c_rows=fetchAll($link, $sql);
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
<link href="css/index.css" rel="stylesheet">
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
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">技术分享</a>></h2>
    <div class="bloglist">
      <h2>
        <p><span><?php echo $cate?></span>模块</p>
      </h2>
      <?php foreach ($c_rows as $c_row):?>
      <div class="blogs">
        <h3><a href="getDetail.php?id=<?php echo $c_row['id']?>"><?php echo $c_row['title'];?></a></h3>
        <figure><img src="test/upload/<?php echo $c_row['pImg'];?>" ></figure>
        <ul>
          <p><?php echo $c_row['brief_introduction'];?></p>
          <a href="getDetail.php?id=<?php echo $c_row['id']?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：<?php echo $c_row['author'];?></span><span>分类：<?php echo $c_row['cate'];?>】</span><span>浏览（<a href="/">459</a>）</span><span>评论（<a href="/">30</a>）</span></p>
        <div class="dateview"><?php echo $c_row['createtime'];?></div>
      </div>
      <?php endforeach;?>

    </div>
  </article>
  <aside>
    <div class="rnav">
      <li class="rnav1 "><a href="getMore.php?cate=<?php $cate="基础";echo $cate?>">基础学习模块</a></li>
      <li class="rnav2 "><a href="getMore.php?cate=<?php $cate="Android";echo $cate?>">ANDROID开发模块</a></li>
      <li class="rnav3 "><a href="getMore.php?cate=<?php $cate="Web";echo $cate?>">WEB模块</a></li>
      <li class="rnav4 "><a href="getMore.php?cate=<?php $cate="Linux";echo $cate?>">LINUX模块</a></li>
      <li class="rnav4 "><a href="getMore.php?cate=<?php $cate="杂文";echo $cate?>">杂文模块</a></li>

    </div>
    <div class="ph_news">
      <h2>
        <p>栏目推荐</p>
      </h2>
      <ul>
      <?php foreach ($title_rows as $title_row):?>
        <li><a href="getDetail.php?id=<?php echo $title_row['id']?>"><?php echo $title_row['title']?></a></li>
	<?php endforeach;?>
      </ul>

    </div>
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
