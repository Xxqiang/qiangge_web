<?php
require_once '../include.php';
checkLogined();
$rows=getAllCate();
if(!$rows){
	alertMes("没有相应分类，请先添加分类!!", "addCate.php");
}
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link href="./styles/global.css"  rel="stylesheet"  type="text/css" media="all" />
<script type="text/javascript" src="./scripts/jquery-1.6.4.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

</head>
<body>
<form action="doAdminAction.php?act=addBlog" method="post" enctype="multipart/form-data">
<table width="90%"  border="1" cellpadding="3" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td  style="width:100px" align="center">博客名称</td>
		<td><input type="text" name="title" placeholder="请输入博客名称"/></td>
	</tr>
	<tr>
		<td style="width:100px" align=center>博客分类</td>
		<td><select name="cate">
		<?php foreach($rows as $row):?>
				<option value="<?php echo $row['cName'];?>"><?php echo $row['cName'];?></option>
			<?php endforeach;?></select></td>
	</tr>
	<tr>
	<td style="width:100px" align="center">作者</td>
	<td><input type="text" name="author" placeholder="请输入作者"></input></td>
	</tr>
	<tr>
		<td style="width:100px" align="center">概要</td>
		<td><textarea  style="width:99.5%;" rows="10" name="brief_introduction" placeholder="摘要"></textarea></td>
	</tr>
	<tr>
	<td style="width:100px" align="center">缩略图（推荐长宽比5:3）</td>
		<td>
<!-- 		<div class="div1"> -->
<!--     		<div class="div2">上传图片</div> -->
				<input type="file" name="myFile"  accept="image/jpg,image/jpeg,image/png,image/gif,image/bmp,image/wbmp"/><br/>
<!-- 			<a href="javascript:void(0)" id="selectFileBtn" >添加缩略图</a> -->
<!-- 			<div id="attachList" class="clear"></div> -->
<!-- 			</div> -->
		</td>
	</tr>
	<tr>
		<td colspan="2"><script id="editor" name="mText" type="text/plain" style="width:100%;height:500px;" placeholder="摘要"></script></td>
	</tr>
	<tr>
		<td align="center" colspan="2"><input type="submit"  value="提交"/></td>
	</tr>
</table>
</form>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
    </script>
</body>
</html>