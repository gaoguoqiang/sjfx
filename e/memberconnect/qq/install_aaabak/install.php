<?php
if(!defined('InEmpireCMS'))
{
        exit();
}

//------ QQ��¼�����װ ------

$appnum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsmember_connect_app where apptype='qq'");
if(!$appnum)
{
	//����QQ��¼Ӧ�ü�¼
	$empire->query("REPLACE INTO `{$dbtbpre}enewsmember_connect_app`(`id`,`apptype`,`appname`,`appid`,`appkey`,`isclose`,`myorder`,`qappname`,`appsay`) VALUES (NULL,'qq','QQ��¼','12345678','123456789',0,0,'QQ','QQ��¼');");

	GetConfig();
}
?>