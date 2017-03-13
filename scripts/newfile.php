<?php
require_once '../include.php';
$link=connect();
$sql="select title,nich_name,signature,phone,e_mail from imooc_admin";
$rows=fetchAll($link, $sql);
$rows=$rows[0];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo "afa"?></title>
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
    <h1>兴强君</h1>
    <h2>今天你路过了谁，谁又错过了你。兴强君，一个集智慧和胆量于一身的男子....</h2>
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
      <div class="blogs">
        <h3><a href="memory.html">操作系统实验——内存管理之页面置换算法</a></h3>
        <figure><img src="http://p1.bpimg.com/567571/b57350b047e4fabe.png" ></figure>
        <ul>
          <p>虚拟内存调度简单的讲就是不适一次性把进程的所有数据都写入内存，而是只写入需要的一部分。那么问题就来了，我们怎么知道那部分是进程运行所需要的呢，但所需要的没有在内存中怎么办呢？这些问题将是我们所要研究的几个内存调度算法所要解决的...</p>
          <a href="memory.html" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：夏兴强</span><span>分类：【<a href="/">杂文分享</a>】</span><span>浏览（<a href="/">459</a>）</span><span>评论（<a href="/">30</a>）</span></p>
        <div class="dateview">2016-12-13</div>
      </div>
      <div class="blogs">
        <h3><a href="makedown.html">markdown让你优雅装逼，静静地码字</a></h3>
        <figure><img src="http://i1.piimg.com/567571/630593c7a37a340f.jpg" ></figure>
        <ul>
          <p>经常刷githup的同学可能会发现几乎所有的readme文件的后缀都是.md，在简书上写作或者在csdn上写博客的时候都会发现专门有个markdown编辑器的选项。今天校园招聘时更有许多报道称用markdown编写的简历让面试官眼前一样。那么markdown究竟是什么呢？有什么好处？怎么用呢？好的，那就专场到强哥装逼现场...</p>
          <a href="makedown.html" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：夏兴强</span><span>分类：【<a href="/">杂文分享</a>】</span><span>浏览（<a href="/">459</a>）</span><span>评论（<a href="/">30</a>）</span></p>
        <div class="dateview">2016-12-12</div>
      </div>
        <div class="blogs">
        <h3><a href="text.html">计网——消息封/解装仿真系统的设计与实现.</a></h3>
        <figure><img src="http://p1.bpimg.com/567571/21045f1fa9e44106.png" ></figure>
        <ul>
          <p>项目用Qt实现客户端像服务器端的通讯，模拟传输层、网络层、链路层和物理层的消息封装和解封过程。涉及到的socket编程，网络通讯原理及Qt基本编程等知识
          </p>
          <a href="text.html" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：夏兴强</span><span>分类：【<a href="/">基础学习</a>】</span><span>浏览（<a href="/">459</a>）</span><span>评论（<a href="/">30</a>）</span></p>
        <div class="dateview">2016-12-07</div>
        </div>
      <div class="blogs">
        <h3><a href="tentcent.html">从腾讯招聘中得到的一些感悟</a></h3>
        <figure><img src="http://i1.piimg.com/567571/0f6a1557a931abbf.jpg" ></figure>
        <ul>
          <p>我是学校腾讯CRAT校招团队中的一员，参加过秋季校园招聘的辅助工作，和HR赵科长有过几次就招聘方面的交流，2号的时候也到成都腾讯公司参观过。通过这几次活动，我把我的所想所感整理成文，希望对像我一样即将进入大四的伙伴有所帮助。</p>
          <a href="tentcent.html" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：夏兴强</span><span>分类：【<a href="/">杂文分享</a>】</span><span>浏览（<a href="/">459</a>）</span><span>评论（<a href="/">30</a>）</span></p>
        <div class="dateview">2016-12-09</div>
      </div>
      <div class="blogs">
        <h3><a href="/">我的个人博客之――阿里云空间选择</a></h3>
        <figure><img src="images/03.png" ></figure>
        <ul>
          <p>之前服务器放在电信机房， 联通用户访问速度很不稳定，经常出现访问速度慢的问题，换到阿里云解决了之前的问题。很多人都问我的博客选得什么空间，一年的费用得多少钱，今天我列个表出来，供大家参考。</p>
          <a href="/" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：杨青</span><span>分类：【<a href="/">网站建设</a>】</span><span>浏览（<a href="/">459</a>）</span><span>评论（<a href="/">30</a>）</span></p>
        <div class="dateview">2014-01-18</div>
      </div>
      <div class="blogs">
        <h3><a href="/">从摄影作品中获取网页颜色搭配技巧</a></h3>
        <figure><img src="images/04.jpg" ></figure>
        <ul>
          <p>作为一个优秀、专业的网页设计师，首先要了解各种颜色的象征，以及不同类型网站常用的色彩搭配。色彩搭配看似复杂,但并不神秘。一般来说,网页的背景色应该柔和一些、素一些、淡一些,再配上深色的文字,使人看起来自然、舒畅。色彩是人的视觉最敏感的东西。主页的色彩处理得好，可以锦上添花，达到事半功倍的效果。</p>
          <a href="/" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：杨青</span><span>分类：【<a href="/">心得笔记</a>】</span><span>浏览（<a href="/">459</a>）</span><span>评论（<a href="/">30</a>）</span></p>
        <div class="dateview">2014-01-09</div>
      </div>
      <div class="blogs">
        <h3><a href="/">css3制作的一个魔方</a></h3>
        <figure><img src="images/04.png" ></figure>
        <ul>
          本应用由CSS3代码实现，无图片和flash，请使用Chrome等webkit内核浏览器或Firefox打开。破解攻略和大家分享下：首先，破解魔方，我们就要先了解它的结构，魔方共6色6面，每面又分为中央块（最中间的块6个）、角块（4角的块8个）和边块（4条边中间的块12个）...
          </p>
          <a href="/" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：杨青</span><span>分类：【<a href="/">css3</a>】</span><span>浏览（<a href="/">459</a>）</span><span>评论（<a href="/">30</a>）</span></p>
        <div class="dateview">2013-09-05</div>
      </div>
    </div>
  </article>
  <aside>
    <div class="avatar"><a href="about.php"><span>关于兴强君</span></a></div>
    <div class="topspaceinfo">
      <h1>执子之手，与子偕老</h1>
      <p>于千万人之中，我遇见了我所遇见的人....</p>
    </div>
    <div class="about_c">
      <p>网名：同学少年 | 夏天不热</p>
      <p>职业：Web前端设计师、网页设计 </p>
      <p>籍贯：云南省―曲靖市</p>
      <p>电话：13062304334</p>
      <p>邮箱：2631825347@qq.com</p>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
        <li><a href="memory.html">操作系统实验——内存管理之页面置换算法</a></li>
        <li><a href="http://36kr.com/p/5059243.html">马化腾就网络安全发声，打击黑产要靠大数据共享</a>></li>
        <li><a href="http://36kr.com/p/5058692.html">一个没有司机的时代离我们有多远？</a></li>
        <li><a href="/">春暖花开-走走停停-发现美</a></li>
        <li><a href="makedown.html">markdown让你优雅装逼，静静地码字</a></li>
        <li><a href="http://36kr.com/p/5056315.html">《大料》川普上台，对中国老百姓经济生活有哪些影响？</a></li>
        <li><a href="tentcent.html">从腾讯招聘中得到的一些感悟</a></li>
      </ul>
    </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
        <li><a href="index.php">兴强君个人博客</a></li>
        <li><a href="www.mizar.space">herry3ll's Blog-热爱生活</a></li>
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
