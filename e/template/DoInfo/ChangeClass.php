<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='������Ϣ';
$url="<a href='../../'>��ҳ</a>&nbsp;>&nbsp;<a href='../member/cp/'>��Ա����</a>&nbsp;>&nbsp;<a href='ListInfo.php?mid=".$mid."'>������Ϣ</a>&nbsp;>&nbsp;������Ϣ&nbsp;(".$mr[qmname].")";
require(ECMS_PATH.'e/template/incfile/header.php');

?>
<script>
function CheckChangeClass()
{
	if(document.changeclass.classid.value==0||document.changeclass.classid.value=='')
	{
		alert("��ѡ����Ŀ");
		return false;
	}
	return true;
}
</script>
<body  class="body_index">
    <?php require(ECMS_PATH.'e/template/incfile/top.php');?>
    <div id="scontent">
        
<div class="wrap1 sclearfix">
    <?php require(ECMS_PATH.'e/template/incfile/left.php');?>

    <div class="stage">
        <form action="AddInfo.php" method="get" name="changeclass" id="changeclass" onsubmit="return CheckChangeClass();">
        <div class="">
            <div class="page_tabs sclearfix" style="border:none;border-bottom: 1px solid #d8dce4;">
                <div class="page_tab selected" style="border:none;border-bottom: 2px solid #FF5F63;bottom:-1px;top:0;">ѡ����Ŀ</div>
            </div>
            <div class="page_content indexpage_content">
				
					<input name="mid" type="hidden" id="mid" value="<?=$mid?>">
					<input name="enews" type="hidden" id="enews" value="MAddInfo">
					<select name=classid size="22" style="width:300px;margin:20px;">
						<script src="<?=$classjs?>"></script>
					</select>
					
				
            </div>
			<input class="signform_btn signbasic_submit" type="submit" value="�����Ϣ" style="border:none;margin-left:35px;">
        </div>
		
		</form>
    </div>
    
</div>

    </div>
   <?php require(ECMS_PATH.'e/template/incfile/footer.php');?>


