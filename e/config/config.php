<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
define('EmpireCMSConfig',TRUE);
$ecms_config=array();

//���ݿ�����
$ecms_config['db']['usedb']='mysql';	//���ݿ�����
$ecms_config['db']['dbver']='5.0';	//���ݿ�汾
$ecms_config['db']['dbserver']='localhost';	//���ݿ��¼��ַ
$ecms_config['db']['dbport']='';	//�˿ڣ�����Ϊ��Ĭ��
$ecms_config['db']['dbusername']='root';	//���ݿ��û���
$ecms_config['db']['dbpassword']='root';	//���ݿ�����
$ecms_config['db']['dbname']='news';	//���ݿ���
$ecms_config['db']['setchar']='gbk';	//����Ĭ�ϱ���
$ecms_config['db']['dbchar']='gbk';	//���ݿ�Ĭ�ϱ���
$ecms_config['db']['dbtbpre']='phome_';	//���ݱ�ǰ׺
$dbtbpre=$ecms_config['db']['dbtbpre'];	//���ݱ�ǰ׺
$ecms_config['db']['showerror']=1;	//��ʾSQL������ʾ(0Ϊ����ʾ,1Ϊ��ʾ)


//ҳ���������
$ecms_config['sets']['pagechar']='gb2312';	//��װ�۹�CMS�ı���汾
$ecms_config['sets']['setpagechar']=1;	//ҳ��Ĭ���ַ���,0=�ر� 1=����
$ecms_config['sets']['elang']='gb';	//���԰�

//��̨�������
$ecms_config['esafe']['openonlinesetting']=3;	//������̨�������ò���(0Ϊ�ر�,1Ϊ��������ǽ����,2Ϊ������ȫ����,3Ϊȫ����)
$ecms_config['esafe']['openeditdttemp']=1;	//������̨�����޸Ķ�̬ģ��(0Ϊ�ر�,1Ϊ����)

//��ͨ��ϵͳ����
$ecms_config['epassport']['open']=0;	//�Ƿ�����ͨ��ϵͳ(1Ϊ������0Ϊ�ر�)

//��������
$ecms_config['sets']['txtpath']=ECMS_PATH.'d/txt/';	//�ı������ݴ��Ŀ¼
$ecms_config['sets']['saveurlimgclearurl']=0;	//Զ�̱���ͼƬ�Զ�ȥ��ͼƬ������(0Ϊ����,1Ϊȥ��)
$ecms_config['sets']['deftempid']=0;	//Ĭ��ģ����ID
$ecms_config['sets']['selfmoreportid']=0;	//��ǰ��վ���ʶ�ID,0Ϊ�����ʶ�



//-------EmpireCMS.Seting.member-------

//��Աϵͳ�������
$ecms_config['member']['tablename']="{$dbtbpre}enewsmember";	//��Ա��
$user_tablename=$ecms_config['member']['tablename'];	//��Ա��
$ecms_config['member']['changeregisterurl']="ChangeRegister.php";    //���Ա����תע���ַ
$ecms_config['member']['registerurl']="";							//��Աע���ַ
$ecms_config['member']['loginurl']="";								//��Ա��¼��ַ
$ecms_config['member']['quiturl']="";								//��Ա�˳���ַ
$ecms_config['member']['chmember']=0;//�Ƿ�ʹ��ԭ���Ա����Ϣ,0Ϊԭ��,1Ϊ��ԭ��
$ecms_config['member']['pwtype']=2;//���뱣����ʽ,0Ϊmd5,1Ϊ����,2Ϊ˫�ؼ���,3Ϊ16λmd5
$ecms_config['member']['regtimetype']=1;//ע��ʱ�䱣���ʽ,0Ϊ����ʱ��,1Ϊ��ֵ��
$ecms_config['member']['regcookietime']=0;//ע����¼����ʱ��(��)
$ecms_config['member']['defgroupid']=0;//ע��ʱ��Ա��ID(ecms�Ļ�Ա��,0Ϊ��̨Ĭ��)
$ecms_config['member']['saltnum']=6;//SALT������ַ���
$ecms_config['member']['utfdata']=0;//�����Ƿ���UTF8����,0Ϊ��������,1ΪUTF8����

$ecms_config['memberf']['userid']='userid';//�û�ID�ֶ�
$ecms_config['memberf']['username']='username';//�û����ֶ�
$ecms_config['memberf']['password']='password';//�����ֶ�
$ecms_config['memberf']['rnd']='rnd';//��������ֶ�
$ecms_config['memberf']['email']='email';//�����ֶ�
$ecms_config['memberf']['registertime']='registertime';//ע��ʱ���ֶ�
$ecms_config['memberf']['groupid']='groupid';//��Ա���ֶ�
$ecms_config['memberf']['userfen']='userfen';//�����ֶ�
$ecms_config['memberf']['userdate']='userdate';//��Ч���ֶ�
$ecms_config['memberf']['money']='money';//�ʻ�����ֶ�
$ecms_config['memberf']['zgroupid']='zgroupid';//����ת���Ա���ֶ�
$ecms_config['memberf']['havemsg']='havemsg';//��ʾ����Ϣ�ֶ�
$ecms_config['memberf']['checked']='checked';//���״̬�ֶ�
$ecms_config['memberf']['salt']='salt';//SALT�����ֶ�
$ecms_config['memberf']['userkey']='userkey';//�û���Կ�ֶ�

//-------EmpireCMS.Seting.member-------




//-------EmpireCMS.Seting.area-------

//��̨��ȫ����
$ecms_config['esafe']['loginauth']='w1234567890';	//��¼��֤��,������õ�¼��Ҫ�������֤�����ͨ��
$ecms_config['esafe']['ecookiernd']='liKfuas9bS3yZ9JqU9D94A7tsqe1pD';	//��̨��¼COOKIE��֤��(��д10~50�������ַ�����ö����ַ����)
$ecms_config['esafe']['ckhloginip']=0;	//��̨�Ƿ���֤��¼IP,0Ϊ����֤,1Ϊ��֤
$ecms_config['esafe']['ckhsession']=0;	//��̨�Ƿ�����SESSION��֤,0Ϊ����֤,1Ϊ��֤
$ecms_config['esafe']['ckhanytime']=0;	//��̨��ʱ��֤��������,��λ:��(0Ϊ������)
$ecms_config['esafe']['theloginlog']=0;	//�Ƿ��¼��½��־(0Ϊ��¼,1Ϊ����¼)
$ecms_config['esafe']['thedolog']=0;		//�Ƿ��¼������־(0Ϊ��¼,1Ϊ����¼)
$ecms_config['esafe']['ckfromurl']=2;	//�Ƿ�������Դ��ַ��֤,0Ϊ����֤,1Ϊȫ����֤,2Ϊ��̨��֤,3Ϊǰ̨��֤
$ecms_config['esafe']['ckhash']=0;	//���ú�̨��Դ��֤��,0Ϊ���ģʽ��֤,1Ϊ���ģʽ��֤,2Ϊ�ر���֤

//COOKIE����
$ecms_config['cks']['ckdomain']='';		//cookie������
$ecms_config['cks']['ckpath']='/';		//cookie����·��
$ecms_config['cks']['ckvarpre']='vehjm';		//ǰ̨cookie����ǰ׺
$ecms_config['cks']['ckadminvarpre']='ofzbb';		//��̨cookie����ǰ׺
$ecms_config['cks']['ckrnd']='8fOmI5TFDy3alxzIUCfGeR5v9H2sXy';	//COOKIE��֤�����(��д10~50�������ַ�����ö����ַ����)
$ecms_config['cks']['ckrndtwo']='3O260DarMm1vn5WEI23HOTQU9IlT0Q';	//COOKIE��֤�����2(��д10~50�������ַ�����ö����ַ����)

//��վ����ǽ����
$ecms_config['fw']['eopen']=0;	//��������ǽ(0Ϊ�ر�,1Ϊ����)
$ecms_config['fw']['epass']='';	//����ǽ������Կ(��д10~50�������ַ�����ö����ַ����)
$ecms_config['fw']['adminloginurl']='';	//�����̨��½������,���ú����ͨ������������ܷ��ʺ�̨
$ecms_config['fw']['adminhour']='';	//�����½��̨��ʱ�䣺0~23Сʱ�����ʱ����ð�Ƕ��Ÿ�
$ecms_config['fw']['adminweek']='';	//�����½��̨�����ڣ�����0~6����������ð�Ƕ��Ÿ�
$ecms_config['fw']['adminckpassvar']='';	//��̨Ԥ��½��֤������
$ecms_config['fw']['adminckpassval']='';	//��̨Ԥ��½��֤��
$ecms_config['fw']['cleargettext']='';	//�����ύ�����ַ�������ð�Ƕ��Ÿ�

//-------EmpireCMS.Seting.area-------


//�ļ�����
$ecms_config['sets']['tranpicturetype']=',.jpg,.gif,.png,.bmp,.jpeg,';	//ͼƬ
$ecms_config['sets']['tranflashtype']=',.swf,.flv,.dcr,';	//FLASH
$ecms_config['sets']['mediaplayertype']=',.wmv,.asf,.wma,.mp3,.asx,.mid,.midi,';	//mediaplayer
$ecms_config['sets']['realplayertype']=',.rm,.ra,.rmvb,.mp4,.mov,.avi,.wav,.ram,.mpg,.mpeg,';	//realplayer




//***************** ���²���Ϊ���棬�������� **************

//-------EmpireCMS.Public.Cache-------

//------------e_public
$public_r=array('sitename'=>'����ͷ��',
'newsurl'=>'/',
'filetype'=>'|.gif|.jpg|.swf|.rar|.zip|.mp3|.wmv|.txt|.doc|.png|.gif|',
'filesize'=>2048,
'relistnum'=>8,
'renewsnum'=>100,
'min_keyboard'=>2,
'max_keyboard'=>20,
'search_num'=>20,
'search_pagenum'=>10,
'newslink'=>0,
'checked'=>0,
'searchtime'=>10,
'loginnum'=>5,
'logintime'=>60,
'addnews_ok'=>0,
'register_ok'=>0,
'indextype'=>'.html',
'goodlencord'=>0,
'goodtype'=>'',
'searchtype'=>'.html',
'exittime'=>40,
'smalltextlen'=>160,
'defaultgroupid'=>1,
'fileurl'=>'http://ceshi.codes99.com/d/file/',
'install'=>0,
'phpmode'=>0,
'dorepnum'=>300,
'loadtempnum'=>50,
'bakdbpath'=>'bdata',
'bakdbzip'=>'zip',
'downpass'=>'0o9g9v8jQluC8PtMGTjf',
'filechmod'=>1,
'loginkey_ok'=>0,
'tbname'=>'news',
'limittype'=>0,
'redodown'=>1,
'downsofttemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'onlinemovietemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'lctime'=>1222406370,
'candocode'=>1,
'opennotcj'=>0,
'listpagetemp'=>'ҳ�Σ�[!--thispage--]/[!--pagenum--]&nbsp;ÿҳ[!--lencord--]&nbsp;����[!--num--]&nbsp;&nbsp;&nbsp;&nbsp;[!--pagelink--]&nbsp;&nbsp;&nbsp;&nbsp;ת��:[!--options--]',
'reuserpagenum'=>50,
'revotejsnum'=>100,
'readjsnum'=>100,
'qaddtran'=>1,
'qaddtransize'=>500,
'ebakthisdb'=>1,
'delnewsnum'=>300,
'markpos'=>5,
'markimg'=>'../data/mark/maskdef.gif',
'marktext'=>'',
'markfontsize'=>'5',
'markfontcolor'=>'',
'markfont'=>'../data/mark/cour.ttf',
'adminloginkey'=>1,
'php_outtime'=>60,
'listpagefun'=>'sys_ShowListPage',
'textpagefun'=>'sys_ShowTextPage',
'adfile'=>'thea',
'notsaveurl'=>'',
'rssnum'=>50,
'rsssub'=>300,
'savetxtf'=>',',
'dorepdlevelnum'=>300,
'listpagelistfun'=>'sys_ShowListMorePage',
'listpagelistnum'=>6,
'infolinknum'=>100,
'searchgroupid'=>0,
'opencopytext'=>0,
'reuserjsnum'=>100,
'reuserlistnum'=>8,
'opentitleurl'=>1,
'searchtempvar'=>1,
'showinfolevel'=>0,
'navfh'=>'>',
'spicwidth'=>105,
'spicheight'=>118,
'spickill'=>1,
'jpgquality'=>80,
'markpct'=>65,
'redoview'=>24,
'reggetfen'=>0,
'regbooktime'=>30,
'revotetime'=>30,
'fpath'=>2,
'filepath'=>'Y-m-d',
'nreclass'=>',',
'nreinfo'=>',',
'nrejs'=>',',
'nottobq'=>',',
'defspacestyleid'=>1,
'canposturl'=>'',
'openspace'=>0,
'defadminstyle'=>1,
'realltime'=>0,
'closeip'=>'',
'openip'=>'',
'hopenip'=>'',
'textpagelistnum'=>6,
'memberlistlevel'=>0,
'ebakcanlistdb'=>0,
'keytog'=>2,
'keytime'=>30,
'keyrnd'=>'G9Cutz2QSdMyCJgrstYeDzsjvo1qsb',
'checkdorepstr'=>',0,0,0,0,',
'regkey_ok'=>0,
'opengetdown'=>0,
'gbkey_ok'=>0,
'fbkey_ok'=>0,
'newaddinfotime'=>0,
'classnavs'=>'<a href=\"/news_hot/\">�ȵ�</a>&nbsp;|&nbsp;<a href=\"/news_society/\">���</a>&nbsp;|&nbsp;<a href=\"/news_entertainment/\">����</a>&nbsp;|&nbsp;<a href=\"/news_tech/\">�Ƽ�</a>&nbsp;|&nbsp;<a href=\"/news_car/\">����</a>&nbsp;|&nbsp;<a href=\"/news_sports/\">����</a>&nbsp;|&nbsp;<a href=\"/news_finance/\">�ƾ�</a>&nbsp;|&nbsp;<a href=\"/news_military/\">����</a>&nbsp;|&nbsp;<a href=\"/news_world/\">����</a>&nbsp;|&nbsp;<a href=\"/news_fashion/\">ʱ��</a>&nbsp;|&nbsp;<a href=\"/news_travel/\">����</a>&nbsp;|&nbsp;<a href=\"/news_discovery/\">̽��</a>&nbsp;|&nbsp;<a href=\"/news_baby/\">����</a>&nbsp;|&nbsp;<a href=\"/news_regimen/\">����</a>&nbsp;|&nbsp;<a href=\"/news_story/\">����</a>&nbsp;|&nbsp;<a href=\"/news_essay/\">����</a>&nbsp;|&nbsp;<a href=\"/news_game/\">��Ϸ</a>&nbsp;|&nbsp;<a href=\"/news_history/\">��ʷ</a>&nbsp;|&nbsp;<a href=\"/news_food/\">��ʳ</a>',
'adminstyle'=>',1,2,',
'docnewsnum'=>300,
'openschall'=>0,
'schallfield'=>1,
'schallminlen'=>3,
'schallmaxlen'=>20,
'schallnum'=>20,
'schallpagenum'=>10,
'dtcanbq'=>1,
'dtcachetime'=>43200,
'repkeynum'=>0,
'regacttype'=>0,
'opengetpass'=>1,
'hlistinfonum'=>30,
'qlistinfonum'=>25,
'dtncanbq'=>1,
'dtncachetime'=>43200,
'readdinfotime'=>0,
'qeditinfotime'=>0,
'onclicktype'=>0,
'onclickfilesize'=>10,
'onclickfiletime'=>60,
'schalltime'=>0,
'defprinttempid'=>1,
'opentags'=>1,
'tagstempid'=>10,
'usetags'=>',1,2,3,4,5,6,7,8,',
'chtags'=>'',
'tagslistnum'=>25,
'closeqdt'=>0,
'settop'=>0,
'qlistinfomod'=>0,
'gb_num'=>20,
'member_num'=>20,
'space_num'=>25,
'infolday'=>0,
'filelday'=>0,
'dorepkey'=>0,
'dorepword'=>0,
'onclickrnd'=>'',
'indexpagedt'=>0,
'keybgcolor'=>'',
'keyfontcolor'=>'',
'keydistcolor'=>'',
'indexpageid'=>0,
'closeqdtmsg'=>'',
'openfileserver'=>0,
'fs_purl'=>'',
'closemods'=>'',
'fieldandtop'=>0,
'fieldandclosetb'=>'',
'filedatatbs'=>',1,',
'filedeftb'=>1,
'pldeftb'=>1,
'plurl'=>'/e/pl/',
'plkey_ok'=>1,
'plface'=>'||[~e.jy~]##1.gif||[~e.kq~]##2.gif||[~e.se~]##3.gif||[~e.sq~]##4.gif||[~e.lh~]##5.gif||[~e.ka~]##6.gif||[~e.hh~]##7.gif||[~e.ys~]##8.gif||[~e.ng~]##9.gif||[~e.ot~]##10.gif||',
'plf'=>'',
'pldatatbs'=>',1,',
'defpltempid'=>1,
'pl_num'=>12,
'plgroupid'=>0,
'closelisttemp'=>'',
'chclasscolor'=>'#99C4E3',
'timeclose'=>'',
'timeclosedo'=>'',
'ipaddinfonum'=>0,
'ipaddinfotime'=>0,
'rewriteinfo'=>'',
'rewriteclass'=>'',
'rewriteinfotype'=>'',
'rewritetags'=>'',
'rewritepl'=>'',
'memberconnectnum'=>1,
'closehmenu'=>'',
'indexaddpage'=>0,
'modmemberedittran'=>1,
'modinfoedittran'=>1,
'deftempid'=>0,'add_sitetitle'=>'����ͷ��','add_siteurl'=>'http://ceshi.codes99.com/','add_beian'=>'���������� 11010802020116��','add_jubao'=>'xxx@xxx.com','add_tj'=>'ͳ�ƴ��������','add_wapurl'=>'http://m.ceshi.codes99.com','add_ftitle'=>'����ĵģ�����ͷ����','add_shorturl'=>'ceshi.codes99.com','add_changyanid'=>'prod_8d01521f822b32f1a30f058371f6eeef','add_changyan_client_id'=>'cys3T11v7');
//------------e_public

//moreports
$emoreport_r=array();
//moreports


//-------EmpireCMS.Public.Cache-------

$emod_pubr=Array('linkfields'=>'|');

$etable_r=array();
$etable_r['news']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>1);
$etable_r['photo']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>3);
$etable_r['movie']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>5);


$emod_r=array();
$emod_r[1]=Array('mid'=>1,
'mname'=>'����ϵͳģ��',
'qmname'=>'����',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,smalltext,writer,befrom,newstext,',
'qenter'=>',title,ftitle,special.field,titlepic,smalltext,writer,befrom,newstext,',
'listtempf'=>',title,ftitle,newstime,titlepic,smalltext,befrom,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'mustqenterf'=>',title,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,smalltext,befrom,',
'cj'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,newstext,',
'caneditf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,newstext,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,befrom,diggtop,',
'tbdataf'=>',writer,newstext,',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|21|',
'tid'=>1,
'tbname'=>'news');
$emod_r[3]=Array('mid'=>3,
'mname'=>'ͼƬϵͳģ��',
'qmname'=>'ͼƬ',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'qenter'=>',title,special.field,filesize,picsize,picfbl,picfrom,titlepic,picurl,picsay,',
'listtempf'=>',title,newstime,titlepic,picurl,picsay,',
'tempf'=>',title,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'mustqenterf'=>',title,picsay,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,picsay,',
'cj'=>',title,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'canaddf'=>',title,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'caneditf'=>',title,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'tbmainf'=>',title,titlepic,newstime,picurl,picsay,',
'tbdataf'=>',filesize,picsize,picfbl,picfrom,morepic,num,width,height,',
'tobrf'=>',picsay,',
'dohtmlf'=>',filesize,picsize,picfbl,picfrom,picurl,morepic,num,width,height,picsay,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',picsay,',
'filef'=>',',
'imgf'=>',titlepic,picurl,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|52|53|54|',
'tid'=>3,
'tbname'=>'photo');
$emod_r[5]=Array('mid'=>5,
'mname'=>'��Ӱϵͳģ��',
'qmname'=>'��Ӱ',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'qenter'=>',',
'listtempf'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,moviefen,moviesay,',
'tempf'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'mustqenterf'=>',title,moviesay,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,movietype,company,player,playadmin,moviesay,',
'cj'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'canaddf'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'caneditf'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'tbmainf'=>',title,titlepic,newstime,movietype,company,movietime,player,playadmin,filetype,filesize,star,moviefen,moviesay,',
'tbdataf'=>',playdk,playtime,downpath,playerid,onlinepath,',
'tobrf'=>',moviesay,',
'dohtmlf'=>',movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',moviesay,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|42|43|44|45|',
'tid'=>5,
'tbname'=>'movie');


//-------EmpireCMS.Public.Cache-------

?>
