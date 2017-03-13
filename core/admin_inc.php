<?php
require_once '../include.php';
/**
 *  检查用户是否存在
 * @param unknown $sql
 * @param unknown $link
 * @return string
 */
function checkAdmin($sql,$link){
    return fetchOne($sql,$link);
}

/**
 *检查用户是否已经登录
 */
function checkLogined(){
     if($_SESSION['adminId']==""&&$_COOKIE['adminId']==""){
         alertMes("请先登录", "login.php");
     }
}
/**
 * 退出登录
 */
function logout(){
     $_SESSION=array();
     if (isset($_COOKIE[session_name()])){
         setcookie(session_name(),"",time()-1);
     }
     if (isset($_COOKIE['adminId'])){
         setcookie("adminId","",time()-1);
     }
     if (isset($_COOKIE['adminName'])){
         setcookie("adminName","",time()-1);
     }
     session_destroy();
     header("location:login.php");
}

/**
 * 添加管理员
 * @return string
 */
function addAdmin(){
     $arr=$_POST;
     $arr['password']=md5($_POST['password']);
     $link=connect();
     if(insert($link, "qiangge_admin", $arr)){
          $mes="添加成功<br/><a href='addAdmin.php'>继续添加</a>|<a href='listAdmin.php '>查看管理员</a>";
     }else {
         $mes="添加失败<br/><a href='addAdmin.php'>重新添加</a>";
     }
     mysqli_close($link);
     return $mes;
}

/**
 * 添加访客
 * @return string
 */
function addUser(){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    $arr['face']="afgfgdhgafsgh";
    $arr["regTime"]=getdate();
    var_dump($arr);
    $link=connect();
    if(insert($link, "qiangge_user", $arr)){
        $mes="添加成功<br/><a href='addUser.php'>继续添加</a>|<a href='listUser.php '>查看用户列表</a>";
    }else {
        $mes="添加失败<br/><a href='addUser.php'>重新添加</a>";
    }
    mysqli_close($link);
    return $mes;
}
/**
 * 添加分类
 * @return string
 */
function addCate(){
    $arr=$_POST;
    $link=connect();
    if(insert($link, "qiangge_cate", $arr)){
        $mes="添加成功<br/><a href='addCate.php'>继续添加</a>|<a href='listCate.php '>查看分类列表</a>";
    }else {
        $mes="添加失败<br/><a href='addCate.php'>重新添加</a>";
    }
    mysqli_close($link);
    return $mes;
}
/**
 * 添加友情链接
 * @return string
 */
function addFriend(){
    $arr=$_POST;
    $link=connect();
    if(insert($link, "qiangge_myfriend", $arr)){
        $mes="添加成功<br/><a href='addFriend.php'>继续添加</a>|<a href='listFriend.php '>查看友情链接列表</a>";
    }else {
        $mes="添加失败<br/><a href='addFriend.php'>重新添加</a>";
    }
    mysqli_close($link);
    return $mes;
}
/**
 * 得到所有的管理员
 */
function getAllAdmin(){
    $link=connect();
    $sql="select id,username,e_mail from qiangge_admin";
    $rows=fetchAll($link,$sql);
    mysqli_close($link);
    return $rows;
}
/**
 * 得到所有的分类
 */
function getAllCate(){
    $link=connect();
    $sql="select * from qiangge_cate";
    $rows=fetchAll($link,$sql);
    mysqli_close($link);
    return $rows;
}
/**
 * 修改管理员
 * @param unknown $id
 * @return string
 */
function editAdmin($id){
    $link=connect();
    $array=$_POST;
    $array['password']=md5($_POST['password']);
    if (update($link, "qiangge_admin", $array,"id='{$id}'")){
        $mes="编辑成功! <a href='listAdmin.php'>查看管理员列表</a>";
    }else{
        $mes="编辑失败!<a href='editAdmin.php'>重新修改</a>";
    }
    mysqli_close($link);
    return $mes;
}
/**
 * 修改分类
 * @param unknown $id
 * @return string
 */
function editCate($id){
    $link=connect();
    $array=$_POST;
    if (update($link, "qiangge_cate", $array,"id='{$id}'")){
        $mes="编辑成功! <a href='listCate.php'>查看分类列表</a>";
    }else{
        $mes="编辑失败!<a href='editCate.php'>重新修改</a>";
    }
    mysqli_close($link);
    return $mes;
}
/**
 * 修改博文
 * @param unknown $id
 * @return string
 */
function editBlog($id){
    $fileArray=$_FILES['myFile'];
    $link=connect();
    $array=$_POST;
    $imgPath=upload($fileArray);
    if($imgPath){
        $array['pImg']=$imgPath;
    }
    $array['createtime']=date("Y-m-d");
    if (update($link, "qiangge_article", $array,"id='{$id}'")){
        $mes="编辑成功! <a href='listBlog.php'>查看博文列表</a>";
    }else{
        $mes="编辑失败!<a href='editBlog.php'>重新修改</a>";
    }
    mysqli_close($link);
    return $mes;
}
/**
 * 删除管理员
 * @param unknown $id
 * @return string
 */
function deleteAdmin($id){
    $link=connect();
    if (delete($link, "qiangge_admin", "id='{$id}'")){
        $mes="删除成功！<a href='listAdmin.php'>查看管理员列表</a>";
    }else{
        $mes="删除失败！<a href='listAdmin.php'>请重新操作</a>";
    }
    return $mes;
}
/**
 * 删除分类
 * @param unknown $id
 * @return string
 */
function deleteCate($id){
    $link=connect();
    if (delete($link, "qiangge_cate", "id='{$id}'")){
        $mes="删除成功！<a href='listCate.php'>查看分类列表</a>";
    }else{
        $mes="删除失败！<a href='listCate.php'>请重新操作</a>";
    }
    return $mes;
}
/**
 * 删除友情链接
 * @param unknown $id
 * @return string
 */
function deleteFriend($id){
    $link=connect();
    if (delete($link, "qiangge_myfriend", "id='{$id}'")){
        $mes="删除成功！<a href='listFriend.php'>查看列表</a>";
    }else{
        $mes="删除失败！<a href='listFriend.php'>请重新操作</a>";
    }
    return $mes;
}

/**
 * 删除博文
 * @param unknown $id
 * @return string
 */
function deleteBlog($id){
    $link=connect();
    if (delete($link, "qiangge_article", "id='{$id}'")){
        $mes="删除成功！<a href='listBlog.php'>查看列表</a>";
    }else{
        $mes="删除失败！<a href='listBlog.php'>请重新操作</a>";
    }
    return $mes;
}
/**
 * 修改网站基本信息
 * @return string
 */
function editMain(){
    $array=$_POST;
    $link=connect();
    if (update($link, "qiangge_main", $array)){
        $mes="编辑成功!";
    }else{
        $mes="编辑失败!<a href='editMain.php'>重新修改</a>";
    }
    mysqli_close($link);
    return $mes;
}

/**
 * 添加博客
 * @return string
 */
function addBlog(){
    $fileArray=$_FILES['myFile'];
    $arr=$_POST;
    $imgPath=upload($fileArray);
    if($imgPath){
        $arr['pImg']=$imgPath;
    }
    $arr['createtime']=date("Y-m-d");
    $link=connect();
    if(insert($link, "qiangge_article", $arr)){
        $mes="添加成功<br/><a href='addBlog.php'>继续添加</a>|<a href='listBlog.php '>查看博文列表</a>";
    }else {
        $mes="添加失败<br/><a href='addBlog.php'>重新添加</a>";
    }
    mysqli_close($link);
    return $mes;
}
