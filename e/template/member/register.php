<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='ע���Ա';
$url="<a href=../../../>��ҳ</a>&nbsp;>&nbsp;<a href=../cp/>��Ա����</a>&nbsp;>&nbsp;ѡ��ע���Ա����";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<br>
<body  class="body_signbasic" body-log="signbasic" gap="^ע��" >
<?php require(ECMS_PATH.'e/template/incfile/top.php');?>

		<div id="scontent">
        
			<div class="signstep">
			<div class="signstep_bg">
				<div class="signstep_bgc" style="width:0%;"></div>
			</div>
			<div class="signstep_item i1">
				<div class="signstep_item_text">ѡ������</div>
			</div>
			<div class="signstep_item_bg i1 "></div>
			<div class="signstep_item i2 current">
				<div class="signstep_item_text">�ʺ�ע��</div>
			</div>
			<div class="signstep_item_bg i2 current"></div>
			<div class="signstep_item i3 ">
				<div class="signstep_item_text">ע�����</div>
			</div>
			<div class="signstep_item_bg i3 "></div>
		</div>

			<div class="signbasic sclearfix" id="pagelet_signbasic">
			<div class="signbasic_mail">
				<!-- <div class="signbasic_mail_title">����ע��:</div> -->
				<form method=post enctype="multipart/form-data" action=../doaction.php>
					<div data-node="fields">
						<input type=hidden name=enews value=register>
						<input name="groupid" type="hidden" id="groupid" value="<?=$groupid?>">
						<input name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">
						<div class="login-form-account">
							<div class="form1_dt">�û���</div>
							<div class="form1_dd">
								<input type="text" name="username" maxlength="50" class="signform_input ">
								<div class="signform_msg jmsg">��������ȷ���û���</div>
								<div class="signform_hint"></div>
							</div>
						</div>
						<div class="login-form-account">
							<div class="form1_dt">����</div>
							<div class="form1_dd">
								<input type="text" name="email" maxlength="50" class="signform_input ">
								<div class="signform_msg jmsg">��������ȷ�������ַ</div>
								<div class="signform_hint">����д���˳������䣬�����佫��Ϊ��¼�ʺ�</div>
							</div>
						</div>
						<div style="display: none;"></div>
						<div class="login-form-account">
							<div class="form1_dt">����</div>
							<div class="form1_dd">
								<input type="password" name="repassword" maxlength="50" class="signform_input">
								<div class="signform_msg jmsg"></div>
								<div class="signform_hint">��ĸ�����ֻ���Ӣ�ķ��ţ����8λ������������֡���Сд��ĸ</div>
							</div>
						</div>
						<div class="login-form-account">
							<div class="form1_dt">ȷ������</div>
							<div class="form1_dd">
								<input type="password" name="password" maxlength="50" class="signform_input">
								<div class="signform_msg jmsg"></div>
								<div class="signform_hint">���ٴ���������</div>
							</div>
						</div>
						<?
						if($public_r['regkey_ok'])
						{
						?>
						<div>
							<div class="form1_dt">��֤��</div>
							<div class="form1_dd">
								<img class="signbasic_captcha_img" src="../../ShowKey/?v=reg" onclick="this.src='../../ShowKey/?v=reg&t='+Math.random()"/>
								<input maxlength="4" type="text" class="signform_input signbasic_captcha_input"  name="key">
								<div class="signform_msg"></div>
							</div>
						</div>
						<?
						}	
						?>
					</div>
					<!-- <div class="form1_checkbox signbasic_agree" data-node="agree">
				   ��ͬ�Ⲣ����<a href="#" class="slink" target="_blank">��ý����û�Э�顷</a>
					</div> -->
					<input class="signform_btn signbasic_submit" type="submit" value="����ע��" style="border:none;">
				</form>
				
			</div>
			<div class="signbasic_other">
				<div class="signbasic_other_title">�����º�����վ�ʺ���Ϊ��¼�ʺ�ʹ��:</div>
				<div class="login_others">
                        <a href="/e/memberconnect/?apptype=qq" class="login_other" ga="��¼_QQ�ʺ�$"><div class="login_other_img login_other_img_qq" style="background-color:#FF6557"></div><div class="login_other_text"></div></a>
                        
                    </div>
			</div>
		</div>

	</div>
<?php require(ECMS_PATH.'e/template/incfile/footer.php');?>