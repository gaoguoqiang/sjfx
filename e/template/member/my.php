<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='�ʺ�״̬';
$url="<a href=../../../>��ҳ</a>&nbsp;>&nbsp;<a href=../cp/>��Ա����</a>&nbsp;>&nbsp;�ʺ�״̬";
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<body  class="body_index">
    <?php require(ECMS_PATH.'e/template/incfile/top.php');?>
    <div id="scontent">
        
<div class="wrap1 sclearfix">
    <?php require(ECMS_PATH.'e/template/incfile/left.php');?>

    <div class="stage formbox">
        
        <div class="">
            <div class="page_tabs sclearfix" style="border:none;border-bottom: 1px solid #d8dce4;">
                <div class="page_tab selected" style="border:none;border-bottom: 2px solid #FF5F63;bottom:-1px;top:0;"><?=$word?></div>
            </div>
            <div class="page_content indexpage_content" id="pagelet-write">
				
				<div class="edit-cell">
					<div class="edit-main front-cover">
						<label class="edit-label">�ʺ�״̬</label>
						<div class="edit-input">
							<div class="front-cover-type">
								<div class="front-cover-item"><?=$user[username]?></div>
							</div>
						</div>
					</div>
				</div>
				<table width="50%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
				  <tr bgcolor="#FFFFFF">
					<td height="25">�û�ID:</td>
					<td height="25"> 
					  <?=$user[userid]?>
					</td>
				  </tr>
				  <tr bgcolor="#FFFFFF"> 
					<td height="25">�û���:</td>
					<td height="25"> 
					  <?=$user[username]?>
					  &nbsp;&nbsp;(<a href="../../space/?userid=<?=$user[userid]?>" target="_blank">�ҵĻ�Ա�ռ�</a>) 
					</td>
				  </tr>
				  <tr bgcolor="#FFFFFF"> 
					<td width="33%" height="25">ע��ʱ��:</td>
					<td width="67%" height="25"> 
					  <?=$registertime?>
					</td>
				  </tr>
				  <tr bgcolor="#FFFFFF"> 
					<td height="25">��Ա�ȼ�:</td>
					<td height="25"> 
					  <?=$level_r[$r[groupid]][groupname]?>
					</td>
				  </tr>
				  <!-- <tr bgcolor="#FFFFFF"> 
					<td height="25">ʣ����Ч��:</td>
					<td height="25"> 
					  <?=$userdate?>
					  �� </td>
				  </tr>
				  <tr bgcolor="#FFFFFF"> 
					<td height="25">ʣ�����:</td>
					<td height="25"> 
					  <?=$r[userfen]?>
					  ��</td>
				  </tr>
				  <tr bgcolor="#FFFFFF"> 
					<td height="25">�ʻ����:</td>
					<td height="25"> 
					  <?=$r[money]?>
					  Ԫ </td>
				  </tr>
				  <tr bgcolor="#FFFFFF"> 
					<td height="25">�¶���Ϣ:</td>
					<td height="25">
					  <?=$havemsg?>
					</td>
				  </tr> -->
				</table>
            </div>
			
        </div>
		
    </div>
    
</div>

    </div>
   <?php require(ECMS_PATH.'e/template/incfile/footer.php');?>


