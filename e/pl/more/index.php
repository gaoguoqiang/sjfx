<?php
require("../../class/connect.php");
eCheckCloseMods('pl');//�ر�ģ��
$id=(int)$_GET['id'];
$classid=(int)$_GET['classid'];
$num=(int)$_GET['num'];
if($num<1||$num>80)
{
	$num=10;
}
$doaction=$_GET['doaction']=='dozt'?'dozt':'';
require("../../class/db_sql.php");
require("../../class/q_functions.php");
$link=db_connect();
$empire=new mysqlquery();
//ר��
if($doaction=='dozt')
{
	if(empty($classid))
	{
		exit();
	}
	//��Ϣ
	$infor=$empire->fetch1("select ztid,restb from {$dbtbpre}enewszt where ztid='$classid' limit 1");
	if(!$infor['ztid'])
	{
		exit();
	}
	$pubid='-'.$classid;
}
else
{
	if(empty($id)||empty($classid))
	{
		exit();
	}
	include("../../data/dbcache/class.php");
	if(empty($class_r[$classid]['tbname']))
	{
		exit();
	}
	//��Ϣ
	$infor=$empire->fetch1("select classid,restb from {$dbtbpre}ecms_".$class_r[$classid]['tbname']." where id='$id' limit 1");
	if(!$infor['classid']||$infor['classid']!=$classid)
	{
		exit();
	}
	$pubid=ReturnInfoPubid($classid,$id);
}
//����
$addorder='plid desc';
$myorder=(int)$_GET['myorder'];
if($myorder==1)
{
	$addorder='plid';
}
$sql=$empire->query("select * from {$dbtbpre}enewspl_".$infor['restb']." where pubid='$pubid' and checked=0 order by ".$addorder." limit ".$num);
?>
document.write("");
<?php
while($r=$empire->fetch($sql))
{
	$plusername=$r[username];
	if(empty($r[username]))
	{
		$plusername='����';
	}
	if($r[userid])
	{
		$plusername="<a href='$public_r[newsurl]e/space/?userid=$r[userid]' target='_blank'>$r[username]</a>";
	}
	$saytime=date('Y-m-d H:i:s',$r['saytime']);
	//ip
	$sayip=ToReturnXhIp($r[sayip]);
	$saytext=str_replace("\r\n","",$r['saytext']);
	$saytext=addslashes(RepPltextFace(stripSlashes($saytext)));//�滻����
?>
document.write("              <li class=\"citem clearfix\">			<div class=\"cavatar\">				<a href=\"/e/space/?userid=<?=$r[userid]?>\" target=\"_blank\">		            <img src=\"[!--userpic--]1\" onload=\"this.style.opacity=1;\"/>		        </a>			</div>			<div class=\"cbody\">				<div class=\"cuser\">					<a class=\"cname\" href=\"/e/space/?userid=<?=$r[userid]?>\" target=\"_blank\"><?=$plusername?></a>				</div>				<div class=\"ctxt\"><?=$saytext?></div>				<div class=\"cinfo clearfix\">					<span class=\"ctime\"><?=$saytime?></span>					<div class=\"c-actions\">						<a class=\"cdigg \" href=\"javascript:;\"><span class=\"digg-num\"><?=$r[zcnum]?></span><i class=\"cbtn\"></i>						</a>					</div>				</div>			</div>		</li>");
<?php
}
?>
document.write("");
<?php
db_close();
$empire=null;
?>