<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
session_start();

//------------------ ������ʼ ------------------

//Ӧ�õ�APPID
$app_id=$appr['appid'];

//Ӧ�õ�APPKEY
$app_secret=$appr['appkey'];

//�ɹ���Ȩ��Ļص���ַ
$my_url=$ReturnUrlQz."e/memberconnect/qq/loginend.php";

//------------------ �������� ------------------

//state�������ڷ�ֹCSRF�������ɹ���Ȩ��ص�ʱ��ԭ������
$_SESSION['state']=md5(uniqid(rand(),TRUE));
//ƴ��URL
$gotologinurl="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=".$app_id."&redirect_uri=".urlencode($my_url)."&state=".$_SESSION['state'];
?>
<html>
<title>QQ��¼</title>
<meta http-equiv="Cache-Control" content="no-cache"/>
<body>
<script>
top.location.href='<?=$gotologinurl?>';
</script>
</body>
</html>