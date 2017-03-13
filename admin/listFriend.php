<?php
require_once '../include.php';
checkLogined();
$link=connect();
$sql="select * from qiangge_myfriend";
$rows=fetchAll($link, $sql);
if(!$rows){
    alertMes("sorry,没有友情链接,请先添加 ","addAdmin.php");
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
                            <input type="button" value="添&nbsp;&nbsp;加" class="add"  onclick="addFriend()">
                        </div>

                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>

                            <tr>
                            	<th width="15%">编号</th>
                                <th width="25%">链接名称</th>
                                <th width="30%">链接地址</th>
                                <th>操作</th>
                            </tr>

                        </thead>
                        <tbody>
							<?php $i=1 ;foreach ($rows as $row):?>
                            <tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><input type="checkbox" id="c1" class="check"><label for="c1" class="label"><?php echo $i?></label></td>
                                <td><?php echo $row["message"]?></td>
                                <td><?php echo $row["url"]?></td>
                                <td align="center"><input type="button" value="修改" class="btn" onclick="editFriend(<?php echo $row["id"]?>)"><input type="button" value="删除" class="btn" onclick="deleteFriend(<?php echo $row["id"]?>)"></td>
                            </tr>
							<?php $i++;endforeach; ?>

                        </tbody>

                    </table>
                </div>

</body>
<script type="text/javascript">
function addFriend(){
	window.location="addFriend.php";
}
function editFriend(id){
	 window.location="editFriend.php?id="+id;
}
function deleteFriend(id){
	if(window.confirm="你确定要删除吗？"){
		window.location="doAdminAction.php?act=deleteFriend&id="+id;
		}
}
</script>
</html>