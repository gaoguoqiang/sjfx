<?php
$public_diyr['pagetitle']='��Ա����';
$url="<a href=../../../>��ҳ</a>&nbsp;>&nbsp;<a href=../cp/>��Ա����</a>";
require(ECMS_PATH.'e/template/incfile/header.php');
if($tmgetuserid){header("location:../cp/");}
?>
<body  class="body_login login-index" gap="^��¼" >

<div id="browser_err"></div>
	
   
    <div id="scontent">
        

<div class="loginindex">
    <div class="stage-header header">
        <a class="logo-jump" href="javascript:;">
            <i class="head-logo"></i>
        </a>
        
    </div>
    <div class="nav"></div>
    <div class="stage" style="width:100%">
        <div class="layer layer-1">
            <div class="banner-top">
                <div class="header">
                    <i class="head-logo"></i>
                    <a class="head-register" target="_blank" href="/e/member/register/ChangeRegister.php">ע���ʺ�</a>
                </div>
                <div class="ripple left">
                    <i class="r1"></i>
                    <i class="r2"></i>
                    <i class="r3"></i>
                    <i class="r4"></i>
                    <i class="r5"></i>
                </div>
                <div class="ripple right">
                    <i class="r1"></i>
                    <i class="r2"></i>
                    <i class="r3"></i>
                    <i class="r4"></i>
                    <i class="r5"></i>
                </div>
                <i class="triangle pos1"></i>
                <i class="triangle pos3"></i>
                <i class="triangle pos4"></i>
            </div>
            <div class="login" style="top:45%;<?php if($public_r['loginkey_ok']) {echo 'height:300px'; }?>" >
                <img class="slogan" src="/style/login/page1_slogan.55b9d0e.png" alt=""/>
                <i class="triangle pos2"></i>
                <div class="login-content jpagelet_login">
                    <div class="login_wrap">
                        <div class="sclearfix">
                            <form method="post" action="../doaction.php">
                                <div data-node="fields">
									<input type=hidden name=ecmsfrom value="<?=ehtmlspecialchars($_GET['from'])?>">
									<input type=hidden name=enews value=login>
									<input name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">
									<div class="login-form-account">
										<div class="form1_dt">�û���</div>
										<div class="form1_dd">
											<input type="text" name="username" maxlength="50" class="signform_input ">
											<div class="signform_msg jmsg">������</div>
											<div class="signform_hint"></div>
										</div>
									</div>
									<div class="login-form-account">
										<div class="form1_dt">����</div>
										<div class="form1_dd">
											<input type="password" name="password" maxlength="50" class="signform_input" style="display: inline-block;">
											<div class="signform_msg jmsg"></div>
											<div class="signform_hint"></div>
										</div>
									</div>
									<?php if($public_r['loginkey_ok']) { ?>
									<div>
										<div class="form1_dt">��֤��</div>
										<div class="form1_dd">
											<img class="signbasic_captcha_img"src="../../ShowKey/?v=login" onclick="this.src='../../ShowKey/?v=login&t='+Math.random()" title="�������,���ˢ��">
											<input maxlength="4" type="text" class="signform_input signbasic_captcha_input" name="key">
											<div class="signform_msg" data-node="msg"></div>
										</div>
									</div>
									<?php }	?>
								</div>
								<div class="form1_dd" style="margin-top: 10px;">
									
									<input type=checkbox name=lifetime value=2592000>һ���������¼
									
									<a href="/e/member/GetPassword/" target="_blank" class="slink login_forget">�������룿</a>
								</div>
                               <input type="submit" class="signform_btn login_submit" value="��¼" style="border:none;">
                            </form>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="login_wrap login_other_wrap" style="margin-top:0;">
                    <div class="login-title">
                        ������ʽ��¼
                    </div>
                    <div class="login_others">
                        <a href="/e/memberconnect/?apptype=qq" class="login_other" ga="��¼_QQ�ʺ�$"><div class="login_other_img login_other_img_qq"></div><div class="login_other_text"></div></a>
                        
                    </div>
                </div>

            </div>
            <!--<div class="banner-bottom"></div>-->
        </div>
        
    </div>
</div>



    </div>
