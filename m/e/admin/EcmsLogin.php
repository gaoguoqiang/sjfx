<?php
/********������֤***********/
$password='RqlYDl2j';				                   //��������ǵ�½��֤�õ�.����Ҫ��ģ�������ú�����һ��������....ע��һ����Ҫ�޸�.
if($password!=$_GET['pw']) exit('��֤�������');   //��ȫ���,���벻�����˳�  ��ͷ���½�ӿڣ�www.adminn.cn��ʾ���������޸�
echo '<ccc>'.time().'</ccc>';
/****���´����רҵ��Ա�������޸�***************/
define('EmpireCMSAdmin','1');
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require LoadLang("pub/fun.php");
require("../class/delpath.php");
require("../class/copypath.php");
require("../class/t_functions.php");
require("../data/dbcache/class.php");
require("../data/dbcache/MemberLevel.php");

//��ȡ�����б�
foreach($class_r as $kv)
{
	if($kv['modid']=='1')
	{
		$cates[]=array('cname'=>$kv['classname'],'cid'=>$kv['classid'],'pid'=>$kv['bclassid']);
	}
}

if(empty($_POST))
{
	//����ˢ���б�
	echo "<select name='list'>";
	echo maketree($cates,0,'');
	echo '</select>';
	exit();
}
$link=db_connect();
$empire=new mysqlquery();

//��֤�û�
$loginin=$_POST['username'];
$lur=$empire->fetch1("select * from {$dbtbpre}enewsuser where `username`='$loginin'");
if(!$lur) exit('�����ڵ��û���'.$loginin);

$logininid=$lur['userid'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];

if(strpos($_POST['title'],'�Ա�')!==false || strpos($_POST['title'],'��è')!==false || strpos($_POST['title'],'����Ͱ�')!==false){
	exit('�����н�ֹ�Ĺؼ���');
}

$incftp=0;
if($public_r['phpmode'])
{
	include("../class/ftp.php");
	$incftp=1;
}
require("../class/hinfofun.php");
$navtheid=(int)$_POST['filepass'];
//=======================================
if($_POST['titlepic'])
{
	$_POST['titlepic'] = str_replace('<img src=','',$_POST['titlepic']);
	$_POST['titlepic'] = str_replace('>','',$_POST['titlepic']);
}

AddNews($_POST,$logininid,$loginin);
db_close();
$empire=null;


/***����Ŀ¼��һ�������㷨***/
function maketree($ar,$id,$pre)
{
	$ids='';
	foreach($ar as $k=>$v){
		$pid=$v['pid'];
		$cname=$v['cname'];
		$cid=$v['cid'];
		if($pid==$id)
		{
			$ids.="<option value='$cid'>{$pre}{$cname}</option>";
			foreach($ar as $kk=>$vv)
			{
				$pp=$vv['pid'];
				if($pp==$cid)
				{ 
					$ids.=maketree($ar,$cid,$pre."&nbsp;&nbsp;");
					break;
				}
			}
		}
	}
	return $ids;
}
