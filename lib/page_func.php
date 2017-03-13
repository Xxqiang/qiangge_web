<?php
// require_once '../include.php';
// $link=connect();
// $sql="SELECT * FROM `qiangge_admin`";
// $totalNum=getResultNum($link, $sql);
// $pageSize=3;
// $totalPage=ceil($totalNum/$pageSize);
// $page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
// if($page<1||$page==null|| !is_numeric($page)){
//     $page=1;
// }
// if ($page>=$totalPage){
//     $page=$totalPage;
// }
// $offset=($page-1)*$pageSize;
// $sql="select * from qiangge_admin limit {$offset},{$pageSize}";
// $rows=fetchAll($link, $sql);
// foreach ($rows as $row){
//     echo "编号  ".$row['id']."<br/>";
//     echo "管理员名称  ".$row['name']."<br/>";
//     echo "管理员邮箱  ".$row['e_mail']."<br/>";
// }
// echo showPage($page,$totalPage);
// echo "<br/>";
// echo showPage($page,$totalPage,"cis=5&pid=6");

function showPage($page,$totalPage,$where=null,$sep="&nbsp;&nbsp"){
    $where=($where=null)?null:"&".where;
    $url=$_SERVER['PHP_SELF'];
    $index=($page==1)?"首页":"<a href='{$url}?page=1{$where}'>首页</a>";
    $last=($page==$totalPage)?"尾页":"<a href='{$url}?page={$totalPage}{$where}'>尾页</a>";
    $prepage=($page>=1)?$page-1:1;
    $nextpage=($page>=$totalPage)?$totalPage:$page+1;
    $pre=($page==1)?"上一页":"<a href='{$url}?page={$prepage}{$where}'>上一页</a>";
    $next=($page==$totalPage)?"下一页":"<a href='{$url}?page={$nextpage}{$where}'>下一页</a>";
    $str="总共{$totalPage}页／当前时第{$page}页";
    for ($i=1;$i<=$totalPage;$i++){
        if ($page==$i){
            $p .="[{$i}] ";
        }else {
            $p .="<a href='{$url}?page={$i}{$where}'>[$i]</a>";
        }
    }
    $pageStr=$str.$sep.$index.$sep.$pre.$sep.$p.$sep.$next.$sep.$last;
    return $pageStr;
}