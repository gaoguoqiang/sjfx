<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='��¼��';
$url="<a href=../../>��ҳ</a>&nbsp;>&nbsp;<a href=../member/cp/>��Ա����</a>&nbsp;>&nbsp;��¼��";
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<body  class="body_index">
    <?php require(ECMS_PATH.'e/template/incfile/top.php');?>
    <div id="scontent">
        
<div class="wrap1 sclearfix">
    <?php require(ECMS_PATH.'e/template/incfile/left.php');?>

    <div class="stage">
        
        <div class="indexpage">
            <div class="page_tabs sclearfix" style="border:none;border-bottom: 1px solid #d8dce4;">
                <div class="page_tab selected" style="border:none;border-bottom: 2px solid #FF5F63;top:0;bottom:-1px;">��¼��</div>
            
            </div>
            
            <div class="page_content indexpage_content">
                
				<form name=favaform method=post action="../doaction.php" onsubmit="return confirm('ȷ��Ҫ����?');">
				<input type=hidden value=hy name=enews>
				
				<div class="indexpage_item">
					<a>ƽ̨</a>
					<i class="sn" style="right:300px;">��ʱ��</i>
					<i class="sn" style="right:400px;">�ϴε�¼</i>
					<i class="sn" style="right:500px;">��¼����</i>
					<i class="sn">����</i>
					
				</div>
				<?php
				while($r=$empire->fetch($sql))
				{
					$bindr=$empire->fetch1("select id,bindtime,loginnum,lasttime from {$dbtbpre}enewsmember_connect where userid='$user[userid]' and apptype='$r[apptype]' limit 1");
					  if($bindr['id'])
					  {
						  $dourl='<a href="doaction.php?enews=DelBind&id='.$bindr['id'].'" onclick="return confirm(\'ȷ��Ҫ�����?\');">�����</a>';
					  }
					  else
					  {
						  $dourl='<a href="index.php?apptype='.$r['apptype'].'&ecms=1">������</a>';
					  }
				?>
				
				<div class="indexpage_item">
					<a><?=$r['appname']?></a>
					<i class="sn" style="right:300px;"><?=$bindr['bindtime']?date('Y-m-d H:i:s',$bindr['bindtime']):'δ��'?></i>
					<i class="sn" style="right:400px;"><?=$bindr['lasttime']?date('Y-m-d H:i:s',$bindr['lasttime']):'--'?></i>
					<i class="sn" style="right:500px;"><?=$bindr['loginnum']?></i>
					<i class="sn"><?=$dourl?></i>
				</div>
				<?php
				}
				?>
				<tr bgcolor="#FFFFFF"> 
				  <td height="25" colspan="4"> &nbsp;&nbsp;&nbsp; 
					<?=$returnpage?></td>
				</tr>
			  </form>
        
				 
            </div>
        </div>
    </div>
    
</div>

    </div>
   <?php require(ECMS_PATH.'e/template/incfile/footer.php');?>


