<?php 
$check= stripslashes($_GET['check']); 

require('./class/connect.php'); //�������ݿ������ļ��͹��������ļ� 
require('./class/db_sql.php'); //�������ݿ�����ļ� 
require("./class/functions.php"); 
require("./class/t_functions.php"); 
require("./data/dbcache/class.php"); 
require("./data/dbcache/MemberLevel.php"); 
require('./class/chtmlfun.php'); 
$link=db_connect(); //����MYSQL 
$empire=new mysqlquery(); //�������ݿ������ 
$cid = trim(stripslashes($_GET['classid']));

if($cid){
	
	$ccc=$empire->fetch1("select classid from {$dbtbpre}enewsclass where classpath='{$cid}' limit 1");
	// var_dump($ccc);exit;
	$_GET['classid']=$ccc['classid'];
}
if($check=="checkcode"){//checkcode ��Ӧnginx���õ� checkcode 
	ReSingleInfo('1','admin');//��ĵ۹���̨ id �� �û��� 
} 

db_close(); //�ر�MYSQL���� 
$empire=null; //ע����������� 
?>