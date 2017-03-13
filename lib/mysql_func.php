<?php
/**
 * 连接数据库
 * @return resource
 */
function connect(){
    $link = mysqli_connect("localhost","root","root");
    if (!$link)
    {
        die('Could not connect: ' . mysqli_error());
    }else{
        mysqli_select_db($link,"qiangge")or die("指定数据库打开失败 ");
    }
    return $link;
}


/**
 * 插入数据库
 * @param string $table
 * @param array $array
 */

function insert($link,$table,$array){
	$keys=join(",",array_keys($array));
	$vals="'".join("','",array_values($array))."'";
	$sql="insert into {$table}($keys) values({$vals})";
    mysqli_query($link,$sql);
    return mysqli_insert_id($link);
}

//updata imooc_admin set username="king" where userid=1
/**
 * 更新数据库
 * @param string $table
 * @param array $array
 * @param string $where
 */
function update($link,$table,$array,$where=null){
    $str=null;
	foreach($array as $key=>$val){
		if($str==null){
			$sep="";
		}else{
			$sep=",";
		}
		$str .=$sep.$key."='".$val."'";
	}
		$sql="update {$table} set {$str} ".($where==null?null:" where ".$where);
		$result=mysqli_query($link,$sql);
		if($result){
			return mysqli_affected_rows($link);
		}else{
			return false;
		}
}

/**
 * 删除
 * @param unknown $table
 * @param unknown $where
 */
function delete($link,$table,$where){
    $where=$where==null?null:"where ".$where;
    $sql="delete from {$table} {$where}";
    mysqli_query($link,$sql);
    return mysqli_affected_rows($link);
}

/**
 * 查询一条记录
 * @param unknown $sql
 * @param string $result_type
 * @return string
 */
function fetchOne($sql,$link){
     $result=mysqli_query($link,$sql);
     $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
     mysqli_free_result($result);
     return $row;
}

/**
 * 查询所有记录
 * @param string $sql
 * @param string $result_type
 * @return array
 */
function fetchAll($link,$sql){
    $result=mysqli_query($link,$sql);
    $rows=array();
	while(@$row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	   $rows[]=$row;
	}
	mysqli_free_result($result);
	return $rows;
}

/**
 * 得到结果集中的记录条数
 * @param unknown $sql
 */
function getResultNum($link,$sql){
     $result=mysqli_query($link,$sql);
     return mysqli_num_rows($result);
}
