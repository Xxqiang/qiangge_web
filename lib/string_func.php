<?php
function buildRandomString($type=1,$length=4){
	if ($type == 1) {
		$chars = join ( "", range ( 0, 9 ) );
	} elseif ($type == 2) {
		$chars = join ( "", array_merge ( range ( "a", "z" ) ) );
	} elseif ($type == 3) {
		$chars = join ( "", array_merge ( range ( "a", "z" ), range ( 0, 9 ) ) );
	}
	if ($length > strlen ( $chars )) {
		exit ( "字符串长度不够" );
	}
	$chars = str_shuffle ( $chars );
	return substr ( $chars, 0, $length );
}

/**
 * 生成唯一字符串
 * @return string
 */
function getUniName(){
    return md5(uniqid(microtime(true),true));
}
/**
 * 得到扩展名
 * @param unknown $fileName
 * @return string
 */
function getExt($fileName){
    return strtolower(end(explode(".", $fileName)));
}