<?php
if(!defined('InEmpireCMS'))
{
	exit();
}

//--------------- ������� ---------------

//��Ա���渽����ַǰ׺
$memberskinurl=$public_r['newsurl'].'skin/member/images/';

//LOGOͼƬ��ַ
$logoimgurl=$memberskinurl.'logo.jpg';

//�Ӽ���ͼƬ��ַ
$addimgurl=$memberskinurl.'add.gif';
$noaddimgurl=$memberskinurl.'noadd.gif';

//���º��߱���ɫ
$bgcolor_line='#FF4F3D';

//����ɫ�����޸�CSS����

//--------------- ������� ---------------


//ʶ����ʾ��ǰ�˵�
function EcmsShowThisMemberMenu(){
	global $memberskinurl,$noaddimgurl;
	$selffile=eReturnSelfPage(0);
	if(stristr($selffile,'/member/msg'))
	{
		$menuname='menumsg';
	}
	elseif(stristr($selffile,'e/DoInfo'))
	{
		$menuname='menuinfo';
	}
	elseif(stristr($selffile,'/member/mspace'))
	{
		$menuname='menuspace';
	}
	elseif(stristr($selffile,'e/ShopSys'))
	{
		$menuname='menushop';
	}
	elseif(stristr($selffile,'e/payapi')||stristr($selffile,'/member/buygroup')||stristr($selffile,'/member/card')||stristr($selffile,'/member/buybak')||stristr($selffile,'/member/downbak'))
	{
		$menuname='menupay';
	}
	else
	{
		$menuname='menumember';
	}
	// echo'<script>turnit(do'.$menuname.',"'.$menuname.'img");</script>';
	?>
	
	<?php
}

//��ҳ����
$thispagetitle=$public_diyr['pagetitle']?$public_diyr['pagetitle']:'��Ա����';
//��Ա��Ϣ
$tmgetuserid=(int)getcvar('mluserid');	//�û�ID
$tmgetusername=RepPostVar(getcvar('mlusername'));	//�û���
$tmgetgroupid=(int)getcvar('mlgroupid');	//�û���ID
$tmgetgroupname='�ο�';
//��Ա������
if($tmgetgroupid)
{
	$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	if(!$tmgetgroupname)
	{
		include_once(ECMS_PATH.'e/data/dbcache/MemberLevel.php');
		$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	}
}
//��Ա��Ϣ#
$userinfo=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid=$tmgetuserid");

//ģ��
$tgetmid=(int)$_GET['mid'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
<link rel="stylesheet" type="text/css" href="/style/login/common.css">
<title><?=$thispagetitle?></title>
<style type="text/css">
#browser_err{
    display: none;
    background: #FFFF88;
    text-align: center;
    font-size: 20px;
    line-height: 1.8;
    border-bottom: 1px solid #808080;
    padding: 10px 0;
}
#browser_err a{
    color: #4D7CD9;
}
    </style>
</head>
