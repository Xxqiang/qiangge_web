<?php
require_once '../include.php';
checkLogined();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>兴强君个人网站后台管理系统</title>
<link rel="stylesheet" href="styles/backstage.css">
</head>
<body>
    <div class="head">
            <div class="logo fl"><a href="#"></a></div>
            <h3 class="head_text fr">兴强君个人网站后台管理系统</h3>
    </div>
    <div class="operation_user clearfix">
        <div class="link fr">
            <b>欢迎您<?php
            if ($_SESSION['adminName']){
                echo $_SESSION['adminName'];
            }elseif ($_COOKIE['adminName']){
                echo $_COOKIE['adminName'];
            }
            ?>
			</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="icon icon_i">首页</a><span></span><a href="#" class="icon icon_j">前进</a><span></span><a href="#" class="icon icon_t">后退</a><span></span><a href="#" class="icon icon_n">刷新</a><span></span><a href="doAdminAction.php?act=logout" class="icon icon_e">退出</a>
        </div>
    </div>
    <div class="content clearfix">
        <div class="main">
            <!--右侧内容-->
            <div class="cont">
                <div class="title">后台管理</div>
      	 		<!-- 嵌套网页开始 -->
                <iframe src="main.php"  frameborder="0" name="mainFrame" width="100%" height="522"></iframe>
                <!-- 嵌套网页结束 -->
            </div>
        </div>
        <!--左侧列表-->
        <div class="menu">
            <div class="cont">
                <div class="title">管理员</div>
                <ul class="mList">
                    <li>
                        <h3><span onclick="show('menu1','change1')" id="change1">+</span>博客管理</h3>
                        <dl id="menu1" style="display:none;">
                        	<dd><a href="addBlog.php" target="mainFrame">添加博客</a></dd>
                            <dd><a href="listBlog.php" target="mainFrame">博客列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span onclick="show('menu2','change2')" id="change2">+</span>分类管理</h3>
                        <dl id="menu2" style="display:none;">
                        	<dd><a href="addCate.php" target="mainFrame">添加分类</a></dd>
                            <dd><a href="listCate.php" target="mainFrame">分类列表</a></dd>
                        </dl>
                    </li>

                    <li>
                        <h3><span onclick="show('menu4','change4')" id="change4">+</span>访客管理</h3>
                        <dl id="menu4" style="display:none;">
                        	<dd><a href="addUser.php" target="mainFrame">添加访客</a></dd>
                            <dd><a href="listUser.php" target="mainFrame">访客列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span onclick="show('menu3','change3')" id="change3">+</span>友情链接管理</h3>
                        <dl id="menu3" style="display:none;">
                        	<dd><a href="addFriend.php" target="mainFrame">添加友情链接</a></dd>
                            <dd><a href="listFriend.php" target="mainFrame">友情链接列表</a></dd>
                        </dl>
                    </li>
                      <li>
                        <h3><span onclick="show('menu5','change5')" id="change5">+</span>管理员管理</h3>
                        <dl id="menu5" style="display:none;">
                        	<dd><a href="addAdmin.php" target="mainFrame">添加管理员</a></dd>
                            <dd><a href="listAdmin.php" target="mainFrame">管理员列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span onclick="show('menu7','change7')" id="change7">+</span>基础信息管理</h3>
                        <dl id="menu7" style="display:none;">
                            <dd><a href="editMain.php" target="mainFrame">编辑基础信息</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <script type="text/javascript">
    	function show(num,change){
	    		var menu=document.getElementById(num);
	    		var change=document.getElementById(change);
	    		if(change.innerHTML=="+"){
	    				change.innerHTML="-";
	        	}else{
						change.innerHTML="+";
	            }
    		   if(menu.style.display=='none'){
    	             menu.style.display='';
    		    }else{
    		         menu.style.display='none';
    		    }
        }
    </script>
</body>
</html>