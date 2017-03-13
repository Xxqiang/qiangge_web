<?php
header("content-type:text/html;charset=utf-8");
require_once '../include.php';
// $_FILES;
// $fileArray=$_FILES['myFile'];
// $fileName = $_FILES['myFile']['name'];
// $type = $_FILES['myFile']['type'];
// $tmp_name = $_FILES['myFile']['tmp_name'];
// $error = $_FILES['myFile']['error'];
// $size = $_FILES['myFile']['size'];
// $allowExt = array(
//     "gif",
//     "jpg",
//     "jpeg",
//     "png",
//     "wbmp",
//     "bmp"
// );

// upload($fileArray);
/**
 * 上传文件
 *
 * @return string
 */
function upload($fileArray ,$isImg = true, $allowExt = array("gif","jpg","jpeg","png","wbmp","bmp"), $allowSize = 2097152)
{
    $ext = getExt($fileArray['name']);
    if ($fileArray['error'] == UPLOAD_ERR_OK) {
        if (in_array($ext, $allowExt)) {} else {
            exit("文件类型不在允许范围之内");
        }
        if (isImg) {
            if (getimagesize($fileArray['tmp_name'])) {} else {
                exit("不是真正的图片类型");
            }
        }
        if ($fileArray['size'] > $allowSize) {
            exit("文件大小超出了限制");
        }

        // 判断是不是通过post方式上传上来的
        // is_uploaded_file($tmp_name);
        if (is_uploaded_file($fileArray['tmp_name'])) {} else {
            exit("文件不是通过http post上传上来的");
        }

        $fileName = getUniName() . "." . $ext;

        $destination = "../test/upload/" . $fileName;
        if (move_uploaded_file($fileArray['tmp_name'], $destination)) {
            $mes = "文件上传成功";
        } else {
            exit("文件移动失败");
        }
        return $fileName;
    } else {
        switch ($fileArray['error']) {
            case 1:
                // UPLOAD_ERR_INI_SIZE
                $mes = "超过了配置文件中规定的大小";
                break;
            case 2:
                // UPLOAD_ERR_FORM_SIZE
                $mes = "超过了表单设置的上传文件的大小";
                break;
            case 3:
                // UPLOAD_ERR_PARTIAL
                $mes = "文件部分被上传";
                break;
            case 4:
                // UPLOAD_ERR_NO_FILE
                $mes = "没有文件被上传";
                break;
            case 6:
                // UPLOAD_ERR_NO_TMP_DIR
                $mes = "没有找到临时目录";
                break;
            case 7:
                // UPLOAD_ERR_CANT_WRITE
                $mes = "文件不可写";
                break;
            case 8:
                // UPLOAD_ERR_EXTENSION
                $mes = "扩展程序中断了文件上传";
                break;
            default:
                break;
        }
        echo $mes;
        return false;
    }

}
//服务器端进行的配置
//php.ini配置文件

// ;;;;;;;;;;;;;;;;
// ; File Uploads ;
// ;;;;;;;;;;;;;;;;

// ; Whether to allow HTTP file uploads.
// file_uploads = On

// ; Temporary directory for HTTP uploaded files (will use system default if not
//     ; specified).

//     upload_tmp_dir = /Applications/MAMP/tmp/php

//     ; Maximum allowed size for uploaded files.
//     upload_max_filesize = 32M


// ; Maximum size of POST data that PHP will accept.
// post_max_size = 32M


//客户端进行的配置
//<input type="hidden" name="MAX_FILE_SIZE" value="1024*1024"/>