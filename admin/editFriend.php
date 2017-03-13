<?php
require_once '../include.php';
checkLogined();
$id=$_REQUEST["id"];
$link=connect();
$sql="select id,message,url from qiangge_myfriend where id='{$id}'";
$row=fetchOne($sql, $link)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<h3>编辑友情链接</h3>
<form action="doAdminAction.php?act=editAdmin&id=<?php echo $id;?>" method="post">
<table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
			<tr>
		 		<td align="right">链接名称</td>
				<td><input type="text" name="message"  placeholder="<?php echo $row['message'];?>"/></td>
			</tr>
			<tr>
				<td align="right">链接网址</td>
				<td> <input type="text" name="url"  placeholder="<?php echo $row['url'];?>"/></td>
			</tr>
			<tr>
				<td colspan="2"> <input type="submit" value="添加友情链接" /></td>
			</tr>

		</table>
</form>
</body>
</html>