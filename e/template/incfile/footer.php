<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<div class="sfoot_p">
        <div class="sfoot">
            <div>
                <a href="mailto:mp@toutiao.com" class="sfoot_email">�ͷ����䣺<?=$public_r['add_jubao']?></a>|
                <a target="_blank" href="#" class="sfoot_selfservice">��������</a>
            </div>
            <div>
                <a target="_blank" class="sfoot_about" href="#">����<?=$public_r['add_sitetitle']?></a>|
                <a target="_blank" href="#" class="sfoot_agreement">�û�Э��</a>|
                
                    <a target="_blank" href="#" class="sfoot_agreement">��ȨͶ��</a>|
                
                <a target="_blank" href="#" class="sfoot_contact">��ϵ����</a>
                &copy; 2016 <?=$public_r['add_sitetitle']?> <?=$public_r['add_siteurl']?>
            </div>
        </div>
    </div>
    
    <div id="wx-feedback"></div>
    <div id="backtop" onclick="backtop();">���ض���</div>
    <!--  -->

<?=EcmsShowThisMemberMenu()?>
</body>
</html>


<!--[if lt IE 8 ]>
<script type="text/javascript">
$(function(){
setTimeout(function(){
    var err=[
        '��Ǹ��ƽ̨���ֹ����޷�֧������������Ϊ��֤ƽ̨���飬������ʹ��<a target="_blank" href="http://www.baidu.com/s?ie=utf-8&wd=%E8%B0%B7%E6%AD%8C%E6%B5%8F%E8%A7%88%E5%99%A8">�ȸ������</a>�� ',
        '�����˫������������л������� / ���� / ���ٺ��ġ�'
        ];
    var ele=document.getElementById('browser_err');
    ele.innerHTML='<div>'+err.join('<br/>')+'</div>';
    ele.style.display='block';
},20);
});
</script>
<![endif]-->