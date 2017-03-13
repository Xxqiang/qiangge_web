<?php
require_once '../include.php';
$act=$_REQUEST['act'];
$id=$_REQUEST['id'];
if ($act=="logout"){
    logout();
}elseif ($act==addAdmin){
    $mes=addAdmin();
}elseif ($act==editAdmin){
    $mes=editAdmin($id);
}elseif ($act==deleteAdmin){
    $mes=deleteAdmin($id);
}elseif($act==addUser){
    $mes=addUser();
}elseif ($act==addBlog){
    $mes=addBlog();
}elseif ($act==editMain){
    $mes=editMain();
}elseif ($act==addCate){
    $mes=addCate();
}elseif ($act==delCate){
    $mes=deleteCate($id);
}elseif ($act==editCate){
    $mes=editCate($id);
}elseif ($act==addFriend){
    $mes=addFriend();
}elseif ($act==deleteFriend){
    $mes=deleteFriend($id);
}elseif ($act==deleteBlog){
    $mes=deleteBlog($id);
}elseif ($act==editBlog){
    $mes=editBlog($id);
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>添加管理员</title>

</head>
<body>
<?php
if ($mes){
    echo $mes;
}
?>
</body>
</html>
