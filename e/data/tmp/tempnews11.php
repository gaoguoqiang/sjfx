<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?=$public_r['add_wapurl']?><?=$grtitleurl?>" >
    <meta charset="gb2312" />
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
    
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    
<script src="http://siteapp.baidu.com/static/webappservice/uaredirect.js" type="text/javascript"></script><script type="text/javascript">uaredirect("<?=$public_r['add_wapurl']?><?=$grtitleurl?>");</script>
    
    <title><?=$grpagetitle?> - <?=$public_r['add_sitetitle']?>(<?=$public_r['add_shorturl']?>)</title>
    <meta name="keywords" content="<?=$ecms_gr[keyboard]?>">
	<meta name="description" content="<?=$grpagetitle?>">

    <link type="text/css" rel="stylesheet" href="/style/ndetail_65199b6.css">
    <link type="text/css" rel="stylesheet" href="/style/nbase_b0dd754.css">
    <link type="text/css" rel="stylesheet" href="/style/core_e4b8984.css">
    
	<script type="text/javascript" charset="gb2312" src="/style/lib_538033e.js"></script>
	<script type="text/javascript" charset="gb2312" src="/style/qrcode.min_1dc0697.js"></script>
	<script type="text/javascript" charset="gb2312" src="/style/asyncmap_2c7ae8b.js"></script>
</head>
<body class="v2016">
    
    
  <div id="wrapper" class="detail-wrapper">
    <div id="pagelet-nnav" class="nohome">
	<!-- ������Ч�� -->
	<div id="instantclick">
		<div id="instantclick-bar" class="instantclick-bar">
		</div>
	</div>
	<div class="topbarWrapper" class="clearfix">
		
		<ul class="left topNav">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,bname from {$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by classid asc limit 0,12",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<?php $classurl=sys_ReturnBqClassname($bqr,9);//ȡ����Ŀ��ַ ?>
			<li class="tb-item"><a class="tb-link" href="<?=$classurl?>" target="_blank" ga_event=""><?=$bqr[classname]?></a></li>
			<?php
}
}
?>
			<li class="tb-item" data-node="moreNav" id="moreNav">
				<a class="tb-link moreNav" href="javascript:;" ga_event="">����</a>
				<div class="nav-layer">
					<ul>
	                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,bname from {$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by classid asc limit 12,10",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						<?php $classurl=sys_ReturnBqClassname($bqr,9);//ȡ����Ŀ��ַ ?>
	                    <li><a href="<?=$classurl?>" class="layer-item" ga_event=""><?=$bqr[classname]?></a></li>
						<?php
}
}
?>
					</ul>
				</div>
			</li>
		</ul>
	<!--���� start-->
<script>
$(function(){
	$('.feedbtn').click(function(){$('.feedback_dialog').toggleClass('on')});
	$('.feedback_dialog .close').click(function(){$('.feedback_dialog').removeClass('on')})
});
function submitfeedback(obj){
  var name='����';
var email=$('[name=email]').val();
var lytext=$('[name=lytext]').val();
if(!email){alert('����д��ϵ��ʽ');return false;}
if(!lytext){alert('�������');return false;}

}
</script>
<div class="dialog feedback_dialog">
    <div class="dialog-header">
        <h3>�������</h3>
    </div>
    <div class="dialog-inner" data-node="inner">
        <div class="feedback_panel">
            <form action="/e/enews/index.php" method="post" name="form1" onsubmit="return submitfeedback(this)">
                <ul>
                    <li>
                        <p class="label">��ϵ��ʽ�����</p>
                        <div class="input-group">
                            <input class="email" placeholder="��������" type="text" name="email">
                        </div>
                    </li>
                    <li>
                        <p class="label">������������</p>
                        <div class="input-group">
                            <textarea style="height:100px;" name="lytext" class="content" maxlength="140" placeholder="����д���������������140��"></textarea>
                        </div>
                    </li>
                    <li>
                        <div class="input-group">
                               <input name="name" type="hidden" id="name" value="����">
                            <input type="submit" name="Submit3" class="submit-btn" value="�ύ">
                                <input name="enews" type="hidden" id="enews" value="AddGbook" />
                                <input type="hidden" name="ecmsfrom" value="/">
                            <span class="msg" data-node="msg"></span>
                            <a data-node="close" class="close" href="javascript:;">[�ر�]</a>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
<!--���� end-->


		<ul class="right">
                         <li class="tb-item"><span><script src="/e/member/login/loginjs2.php"></script></span></li>
			<li class="tb-item" id="mth"><a class="tb-link" href="/e/member/login" target="_blank">ý���</a></li>
			
			<li class="tb-item"><a class="tb-link feedbtn" href="javascript:;" >����</a></li>
			<li class="tb-item" data-node="more" id="moreAbout">
				<a class="tb-link" href="/about/" ga_event="nav_more">����</a>
				<div class="layer">
					<ul>
						<li><a href="/about/about.html" class="layer-item">��������</a></li>
						<li><a href="/about/join.html" class="layer-item">����ͷ��</a></li>
						<li><a href="/about/report.html" class="layer-item">ý�屨��</a></li>
						<li><a href="/about/media_partners.html" class="layer-item">ý�����</a></li>
						<li><a href="/about/cooperation.html" class="layer-item">��Ʒ����</a></li>
						<li><a href="/about/media_cooperation.html" class="layer-item">����˵��</a></li>
						<li><a href="/about/contact.html" class="layer-item">��ϵ����</a></li>
						<li><a href="/about/user_agreement.html" class="layer-item">�û�Э��</a></li>
						<li><a href="/about/complain.html" class="layer-item">Ͷ��ָ��</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>

	<!--[if lt IE 9 ]><style>.midbarWrapper{border-bottom:1px solid #e8e8e8;}</style><![endif]-->
	<div class="midbarWrapper">
		<div class="midbar-inner">
			<div class="logo-box">
				<a class="logo-link" href="/" ga_event="nav_icon"><img class="logo" src="/style/logo.png"></a>
			</div>
			<div class="search-box" data-node="searchBox">
				<form action="/e/search/" method="get" data-node="searchForm" target="_blank">
	                <div class="input-group clearfix">
										<!-- <span class="placeholder" data-node="placeholder"></span> -->
	                    <input autocomplete="off" ga_event="nav_search_input" data-node="searchInput" name="keyword" type="text" placeholder="" value="">
	                    <div class="btn-submit">
	                        <button ga_event="nav_search" type="submit" href="javascript:;" data-node="searchSubmit">
	                            <i class="icon icon-search"></i>
	                        </button>
	                    </div>
	                </div>
	            </form>
	            <div class="slayer">
	            	<div class="slayer-con">
	            		<div class="search-tip">��������</div>
                    	<ul data-node="searchMenu"></ul>
                    </div>
                </div>
			</div>
			<div class="user-box" data-node="userbox" >
				
			</div>
		</div>
	</div>
</div>

    <div id="container" class="clearfix">
      <div class="detail-main">
        <div id="pagelet-article">
	
	<div class="curpos">
		<a href="/" target="_blank" ga_event="click_index">��ҳ</a>
		&gt;
		<a href="#" target="_blank" ga_event="click_channel"><?=$class_r[$ecms_gr[classid]][classname]?></a>
	</div>
	
	<div class="article-header">
		<h1 class="title"><?=$ecms_gr[title]?></h1>
		<div class="minibar clearfix">
			
            
            <span class="time"><?=date('Y-m-d H:i',$ecms_gr[newstime])?></span>
		</div>
	</div>
	<div class="article-content"><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?></div>
	<div class="article-actions">
		<div class="top-actions clearfix">
			
			<ul class="tag-list">
				<? @sys_eShowTags('selfinfo',4,0,'',0,'',' ',0,'','tagname');?>
				
			</ul>
			
			<a class="areport feedbtn" href="javascript:;">Ͷ��</a>
		</div>
		<div class="bottom-actions clearfix" data-node="articleAction" data-groupid="6271897696975126786" >
			<div class="snsbox">
            	<div class="snsbox-inner">
		            <span>������</span>
					<div class="bdsharebuttonbox snszone">
						<a href="#" class="sns-btn sns-qzone bds_qzone" data-cmd="qzone" title="����QQ�ռ�"></a>
						<a href="#" class="sns-btn sns-weibo bds_tsina" data-cmd="tsina" title="��������΢��"></a>
						<a href="#" class="sns-btn sns-weixin bds_weixin" data-cmd="weixin" title="����΢��"></a>
					</div>
					<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"<?=$grpagetitle?> ����<?=$public_r['add_sitetitle']?>","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
				</div>
			</div>

			<!-- <a class="abtn abtn-fav" data-type="repin" data-node="fav" href="javascript:;">�ղ�</a> -->
			
		</div>
	</div>
</div>

        
        <div id="pagelet-relatednews">
	<div class="dtag">����Ķ�</div>
	<ul class="relatednews" data-node="listBox">
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from phome_ecms_news where classid='.$navclassid.' and titlepic <>"" order by onclick DESC limit 4',6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<li class="item clearfix" data-node="item">
			<div class="item-inner">
				<div class="lbox left">
					<a href="<?=$bqsr[titleurl]?>" target="_blank">
						<img class="feedimg middle-mode" src="<?=$bqr[titlepic]?>" onload="this.style.opacity=1;">
					</a>
				</div>
				<div class="rbox"><!--hold-->
					<div class="rbox-inner">
						<div class="title-box">
							<a ga_event="click_title_relevant" class="link title" href="<?=$bqsr[titleurl]?>" target="_blank" data-node="title">
								<?=$bqr[title]?>
							</a>
						</div>
						<div class="abstract">
							<a ga_event="click_abstract_relevant" class="link" href="<?=$bqsr[titleurl]?>" target="_blank"><?=$bqr[smalltext]?></a>
						</div>
						<div class="footer clearfix">
							<div class="left lfooter">
								
								<a class="lbtn source" href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqsr[classname]?>&nbsp;&sdot;</a>	
									
								<!-- <span class="lbtn comment">0����&nbsp;&sdot;</span> -->
								<span class="lbtn time"><?=date('m-d H:i',$bqr[newstime])?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</li>
		<?php
}
}
?>
	</ul>
</div>
        

        <div class="d-union-1"></div>

        

<div id="pagelet-ncomment">
	<!-- ����ʵ������ҳ���������ת������ҳ������ -->
	<div id="comment_area"></div>
	<div class="cheader clearfix">
		<div class="dtag">�������� �� <a href="/e/pl/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>" target="_blank">��������</a></div>
		<div class="ctotal">
			<span class="ctotalnum" data-node="ctotalnum"><script type="text/javascript" src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2"></script></span>��
		</div>
	</div>
	<form action="/e/pl/doaction.php" method="post" name="saypl" id="saypl" >
	<input name="username" type="hidden" class="inputText" id="username" value="" size="16" />
	<input name="password" type="hidden" class="inputText" id="password" value="" size="16" />
	<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
	<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
	<input name="enews" type="hidden" id="enews" value="AddPl" />
	<input name="repid" type="hidden" id="repid" value="0" />
	<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>">
	<div class="ceditzone clearfix">
		<div class="cavatar" data-node="cavatar"><img src="" onload="this.style.opacity=1" style="opacity: 1;"></div>
		<div class="cbody cedit" data-node="cedit">
			<div class="ctextarea">
				<textarea class="cinput" name="saytext" placeholder="д���������..." onfocus="$(this).parent().parent().addClass('focus');$('#yzm').show()"></textarea>
			</div>
			<div class="caction">
				<div class="cshare">
					<div class="snsbox" style="font-size:13px">
						 ���������ص��ط��ɷ���
					</div>
				</div>
<span style="position:relative;top:5px;left:40px;display:none;" id="yzm">
				<input name="key" type="text" class="inputText" size="10"  />
				<img style="position: relative;top: 5px;" src="/e/ShowKey/?v=pl" align="absmiddle" name="plKeyImg" id="plKeyImg" onclick="plKeyImg.src='/e/ShowKey/?v=pl&t='+Math.random()" title="�������,���ˢ��" />
				����:<input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
</span>
				<input type="submit" name="imageField" value="����" class="csubmit" style="    border: none;">
			</div>
		</div>
	</div>
	</form>
	<ul id="clist" class="clist" data-node="listBox">
		<script>
		//��¼ͷ��
		$.get('/e/pl/more/userpic.php',{},function(ret){
			$('.cavatar img').attr('src',ret);
		})
		//��������
		var p=1;
		function getmorepl(){
			var plurl='/e/pl/more/more.php?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&num=5&p='+p;
			$.get(plurl,{},function(ret){
				$('#clist').append(ret);
				p=p+1;
				var re = 'digg-num';
				var len = ret.split(re).length;
				if(len<6){
					$('.cloadmore').text('ȫ���������').attr('onclick','');
				}
			});
		}
		$(function(){getmorepl();})
		</script>
		
	</ul>
	
	<a class="cloadmore" href="javascript:;" style="display:block;text-align:center;" onclick="getmorepl()">������ظ���</a>
</div>

      </div>
      <div class="detail-right">
        <?php
		$userr=sys_ShowMemberInfo($navinfor['userid'],'');
		?>
        <div id="pagelet-nsubscribe" class="sideGap">
      <div class="Pgc_info">
        <div class="image_head" style="background:url(/style/admin.jpg) no-repeat;background-size:100% 100%;">
          
          <img onload="this.style.opacity=1" src="<?=$userr[userpic]?>" alt="" />

        </div>

        <span class="Pgc_name">
          <?=$ecms_gr[ismember]==1&&$ecms_gr[userid]?'<a href="'.$public_r[newsurl].'e/space/?userid='.$ecms_gr[userid].'" target=_blank>'.$ecms_gr[username].'</a>':$ecms_gr[username]?> 
        </span>
        <span class="Pgc_details"><?=$userr[saytext]?></span>

        
        
        <!-- <a data-action="like" class="Pgc_btn" data-node="Pgc_subscribe"  data-mediaid="">
          ��ע��������
        </a> -->
        
        

      </div>

<div class="article_container">
      <div class="Pgc_article">
        <ul>
          <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("news",5,18,0,"userid='$navinfor[userid]'","id DESC");
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li >
              <a target="_blank" href="<?=$bqsr['titleurl']?>"><?=esub($bqr['title'],'32')?></a>
          </li>
          <?php
}
}
?>

        </ul>
      </div>
      </div>
</div>

        

        <div id="pagelet-iad" class="sideGap">
			<script src=/d/js/acmsd/thea2.js></script>
		</div>
        
		<div id="pagelet-hotvideo" class="sideGap">
			<div class="hotvideo_head dtag">���µ������</div>
			<ul class="monthhot">
				<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("selfinfo",10,1,0,"date_format(from_UNIXTIME(newstime),'%Y-%m') = date_format(now(),'%Y-%m')","onclick DESC");
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><i><?=$bqno?></i><a href="<?=$bqsr['titleurl']?>" target="_blank">
					<?=esub($bqr['title'],'32')?>
				</a></li>
				<?php
}
}
?>
			</ul>
		</div>
		
        <div id="pagelet-hotgallery" class="sideGap">
			<div class="dtag">����ͼƬ</div>
			<ul class="hotgallery_show">
				<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("selfinfo",10,1,0,"date_format(from_UNIXTIME(newstime),'%Y-%m') = date_format(now(),'%Y-%m') and isgood > 0","onclick DESC");
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li class="gallery_item style_1" id="pic_<?=$bqno?>">
					<a href="<?=$bqsr['titleurl']?>" target="_blank">
						<div class="gallery-con clearfix">
						<span class="pic_number">ͼ</span>
						<div class="image large">
							<img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
						</div>
						</div>
						<div class="title">
							<div class="title_content">
								<div class="pic_name">
									<p><?=esub($bqr['title'],'32')?></p>
								</div>
							</div>
						</div>
					</a>
				</li>
				<?php
}
}
?>
			</ul>
		</div>
        

      </div>
    </div>
    <div id="pagelet-sidetool">
		<div class="sidetool-innner">
		<a class="stool rhome" href="/" target="_self" ga_event="click_homepage_interactive"></a>
		<a class="stool rcomment" href="javascript:;" onclick="$('html,body').animate({scrollTop:$('#comment_area').offset().top-30}, 800);">
			<span class="sidetxttip">��������</span>
		</a>
		
		<a class="stool rarticle" href="javascript:;" onclick="$('html,body').animate({scrollTop:$('#pagelet-relatednews').offset().top-90}, 800);">
			<span class="sidetxttip">����Ķ�</span>
		</a>
		
		<span class="stool rshare" href="javascript:;" data-node="rshare">
			<div class="sidesnstip">
				<div class="snsbox">
					<div class="snsbox-inner">
			            <span style="line-height: 40px;">������</span>
			            <div class="bdsharebuttonbox snszone">
							<a href="#" class="sns-btn sns-qzone bds_qzone" data-cmd="qzone" title="����QQ�ռ�" style="margin-left:5px"></a>
							<a href="#" class="sns-btn sns-weibo bds_tsina" data-cmd="tsina" title="��������΢��" style="margin-left:5px"></a>
							<a href="#" class="sns-btn sns-weixin bds_weixin" data-cmd="weixin" title="����΢��" style="margin-left:5px"></a>
						</div>
					</div>
				</div>
			</div>
		</span>
		
		<a class="stool rtop" href="javascript:;" onclick="$('html,body').animate({scrollTop: '0px'}, 800);"></a>
	</div>
</div>

  </div>


   <div id="aboutus">
        <div>
            <span class="fitem">&#169; 2016 <?=$public_r['add_sitetitle']?> <?=$public_r['add_siteurl']?></span>
            
            <a class="fitem" href="http://www.12377.cn/" target="_blank">�й��������ٱ�����</a>
            
            <a class="fitem" href="http://www.miibeian.gov.cn/" target="_blank">��ICP֤140141��</a>
            <a class="fitem" href="http://www.miibeian.gov.cn/" target="_blank">
			<?=$public_r['add_beian']?></a>
            
        </div>
        <div>
            <span class="fitem">Υ���Ͳ�����Ϣ�ٱ���<?=$public_r['add_jubao']?></span>
            <span style="display:none"><?=$public_r['add_tj']?> </span>
            
            
        </div>
    </div>
    
 <script src="/e/extend/DoTimeRepage/"></script>
    <script src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1"></script>
</body>
</html>
