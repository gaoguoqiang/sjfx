<?php
if(!defined('InEmpireCMS'))
{
        exit();
}

//------ QQ��¼���ж�� ------

//ɾ��QQ��¼Ӧ�ü�¼
$empire->query("delete from {$dbtbpre}enewsmember_connect_app where apptype='qq';");

GetConfig();

?>