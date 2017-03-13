<?php
require_once '../include.php';
checkLogined();
$link=connect();
$sql="SELECT * FROM `qiangge_article`";
$totalNum=getResultNum($link, $sql);
$pageSize=6;
$totalPage=ceil($totalNum/$pageSize);
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1||$page==null|| !is_numeric($page)){
    $page=1;
}
if ($page>=$totalPage){
    $page=$totalPage;
}
$offset=($page-1)*$pageSize;
$sql="select id,title,author,createtime,cate from qiangge_article limit {$offset},{$pageSize}";
$rows=fetchAll($link, $sql);
if(!$rows){
    alertMes("sorry,没有博文,请先添加 ","addBlog.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="styles/backstage.css">
</head>
<body>
<div class="details">
                    <div class="details_operation clearfix">
                        <div class="bui_select">
                            <input type="button" value="添&nbsp;&nbsp;加" class="add"  onclick="addBlog()">
                        </div>

                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>

                            <tr>
                            	<th width="5%">编号</th>
                                <th width="30%">博文名称</th>
                                <th width="10%">分类</th>
                                <th width="10%">作者</th>
                                <th width="15%">发布时间</th>
                                <th>操作</th>
                            </tr>

                        </thead>
                        <tbody>
							<?php $i=1 ;foreach ($rows as $row):?>
                            <tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><input type="checkbox" id="c1" class="check"><label for="c1" class="label"><?php echo $i?></label></td>
                                <td><?php echo $row["title"]?></td>
                                <td><?php echo $row["cate"]?></td>
                                <td><?php echo $row["author"]?></td>
                                <td><?php echo $row["createtime"]?></td>
                                <td align="center"><input type="button" value="修改" class="btn" onclick="editBlog(<?php echo $row["id"]?>)"><input type="button" value="删除" class="btn" onclick="deleteBlog(<?php echo $row["id"]?>)"></td>
                            </tr>
							<?php $i++;endforeach; ?>
                            <tr>
                            <td colspan="6" align="center">
								<?php echo showPage($page,$totalPage);?>
								</td>
                            </tr>

                        </tbody>

                    </table>
                </div>

</body>
<script type="text/javascript">
function addBlog(){
	window.location="addBlog.php";
}
function editBlog(id){
	 window.location="editBlog.php?id="+id;
}
function deleteBlog(id){
	if(window.confirm="你确定要删除吗？"){
		window.location="doAdminAction.php?act=deleteBlog&id="+id;
		}
}
</script>
</html>