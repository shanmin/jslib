<?php
//	PHP file upload
//
//	!!! WARNING !!!
//
//		这个文件上传代码仅作为演示使用，不具备任何安全性，请勿在生产环境下直接使用！！！
//
//	!!! WARNING !!!
//

$upload_path=dirname(__DIR__).'/upload';

foreach($_FILES as $file)
{
	$dir=date('YmdHis');
	mkdir($upload_path.'/'.$dir);

	$newpath="{$dir}/{$file['name']}";
	move_uploaded_file($file['tmp_name'],"{$upload_path}/{$newpath}");

	$ret=[];
	$ret['file']=$newpath;
	die(json_encode($ret,JSON_UNESCAPED_UNICODE));
}

?>