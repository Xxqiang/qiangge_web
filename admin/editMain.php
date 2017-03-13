<?php
require_once '../include.php';
checkLogined();
$link=connect();
$sql="SELECT * FROM `qiangge_main`";
$row=fetchOne($sql,$link);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改基础信息</title>
<link href="./styles/global.css"  rel="stylesheet"  type="text/css" media="all" />
<script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/kindeditor.js"></script>
<script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="./scripts/jquery-1.6.4.js"></script>
</head>
<body>
<form action="doAdminAction.php?act=editMain" method="post">
<table width="90%"  border="1" cellpadding="3" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td  style="width:100px" align="center">网站名称</td>
		<td><input type="text" name="title" value=<?php echo $row["title"]?>></input></td>
	</tr>
	<tr>
		<td style="width:100px" align=center>个人昵称</td>
		<td><input  type="text" name="nich_name" value=<?php echo $row["nich_name"]?>></input></td>
	</tr>
	<tr>
	<td style="width:100px" align="center">个性签名</td>
	<td><input type="text" name="signature" style="width: 95%" value=<?php echo $row["signature"]?>></input></td>
	</tr>
	<tr>
		<td style="width:100px" align="center">电子邮箱</td>
		<td><input type="text"  name="e_mail" value=<?php echo $row["e_mail"]?>></td>
	</tr>
	<tr>
		<td style="width:100px" align="center">手机号</td>
		<td><input type="text"  name="phone" value=<?php echo $row["phone"]?>></td>
	</tr>
	<tr>
		<td style="width:100px" align="center">关于我</td>
		<td><textarea style="width:100%;height:100px;" name="about_me" value=<?php echo $row["about_me"]?>></textarea></td>
	</tr>

	<tr>
		<td align="center" colspan="2"><input type="submit"  value="提交"/></td>
	</tr>
<!--  今天你错过了谁？谁又丢失了你？人生很多事总是稍纵即逝，记忆很灵感更是短暂的如同流星，你还没来得及欣赏它就已经离去。对于它们的离去，我们往往无可奈何，但我们可以通过记录和分享延长它。 -->
</table>
</form>
</body>
</html>