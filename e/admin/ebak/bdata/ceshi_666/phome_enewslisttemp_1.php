<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslisttemp`;");
E_C("CREATE TABLE `phome_enewslisttemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewslisttemp` values('1','Ĭ�������б�ģ��','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=gb2312\\\\\" />\r\n<title>[!--pagetitle--] - Powered by EmpireCMS</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"listpage\\\\\">\r\n[!--temp.header--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td class=\\\\\"news_list\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n<tr>\r\n<td>����ǰ��λ�ã�[!--newsnav--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[!--empirenews.listtemp--]<ul>\r\n<!--list.var1-->\r\n<!--list.var2-->\r\n<!--list.var3-->\r\n<!--list.var4-->\r\n<!--list.var5--></ul>\r\n[!--empirenews.listtemp--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr>\r\n                <td height=\\\\\"38\\\\\"><div class=\\\\\"epages\\\\\">[!--show.listpage--]</div></td>\r\n</tr>\r\n</table>\r\n</td>\r\n</tr>\r\n</table></td>\r\n<td class=\\\\\"sider\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>�Ƽ���Ѷ</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"8\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[phomenewspic]\\\\''selfinfo\\\\'',2,4,128,90,1,20,2[/phomenewspic]\r\n</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>������</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ul>\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,44,0,0,2,0[/ecmsinfo] \r\n</ul></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>���ŵ��</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ol class=\\\\\"rank\\\\\">\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,40,0,1,10,0[/ecmsinfo] \r\n</ol></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0','0','<li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a> <span>[!--newstime--]</span></li>','5','1','Y-m-d','0','0','0');");
E_D("replace into `phome_enewslisttemp` values('3','Ĭ��ͼƬ�б�ģ��','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=gb2312\\\\\" />\r\n<title>[!--pagetitle--] - Powered by EmpireCMS</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"listpage\\\\\">\r\n[!--temp.header--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td class=\\\\\"list_content\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n<tr>\r\n<td>����ǰ��λ�ã�[!--newsnav--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\">\r\n<tr>\r\n<td colspan=\\\\\"3\\\\\" class=\\\\\"photo_list\\\\\">\r\n[!--empirenews.listtemp--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" class=\\\\\"line_bottom\\\\\">\r\n	<tr>\r\n		<td width=\\\\\"25%\\\\\" valign=\\\\\"top\\\\\"><!--list.var1--></td>\r\n		<td width=\\\\\"25%\\\\\" valign=\\\\\"top\\\\\"><!--list.var2--></td>\r\n		<td width=\\\\\"25%\\\\\" valign=\\\\\"top\\\\\"><!--list.var3--></td>\r\n		<td width=\\\\\"25%\\\\\" valign=\\\\\"top\\\\\"><!--list.var4--></td>\r\n	</tr>\r\n</table>\r\n[!--empirenews.listtemp--]\r\n</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"list_page\\\\\">\r\n<tr>\r\n<td>[!--show.page--]</td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table></td>\r\n<td class=\\\\\"sider\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>ͼƬ�Ƽ�</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"8\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[phomenewspic]\\\\''selfinfo\\\\'',2,4,128,90,1,20,2[/phomenewspic] </td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>������</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ul>\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,44,0,0,2,0[/ecmsinfo]\r\n</ul></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>���ŵ��</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ol class=\\\\\"rank\\\\\">\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,40,0,1,10,0[/ecmsinfo]\r\n</ol></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0','0','<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"4\\\\\" cellpadding=\\\\\"0\\\\\">\r\n	<tr valign=\\\\\"top\\\\\">\r\n		<td align=\\\\\"center\\\\\" class=\\\\\"titlepic\\\\\"><a href=\\\\\"[!--titleurl--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\" width=\\\\\"128\\\\\" height=\\\\\"90\\\\\" border=\\\\\"0\\\\\" /></a></td>\r\n	</tr>\r\n	<tr>\r\n		<td align=\\\\\"center\\\\\"><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></td>\r\n	</tr>\r\n</table>','4','3','Y-m-d H:i:s','22','0','0');");
E_D("replace into `phome_enewslisttemp` values('5','Ĭ�ϵ�Ӱ�б�ģ��','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=gb2312\\\\\" />\r\n<title>[!--pagetitle--] - Powered by EmpireCMS</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"listpage\\\\\">\r\n[!--temp.header--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td class=\\\\\"list_content\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n<tr>\r\n<td>����ǰ��λ�ã�[!--newsnav--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\">\r\n<tr>\r\n<td colspan=\\\\\"3\\\\\" class=\\\\\"movie_list\\\\\">\r\n[!--empirenews.listtemp--]\r\n<!--list.var1-->\r\n[!--empirenews.listtemp--]\r\n</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"list_page\\\\\">\r\n<tr>\r\n<td>[!--show.page--]</td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table></td>\r\n<td class=\\\\\"sider\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>Ӱ���Ƽ�</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"8\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[phomenewspic]\\\\''selfinfo\\\\'',2,4,128,90,1,20,2[/phomenewspic] </td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>������</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ul>\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,44,0,0,2,0[/ecmsinfo]\r\n</ul></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>���ŵ��</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ol class=\\\\\"rank\\\\\">\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,40,0,1,10,0[/ecmsinfo]\r\n</ol></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','100','0','<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"8\\\\\" class=\\\\\"line_bottom\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n    <td width=\\\\\"27%\\\\\" align=\\\\\"center\\\\\" class=\\\\\"titlepic\\\\\"><a href=\\\\\"[!--titleurl--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\" width=\\\\\"120\\\\\" height=\\\\\"150\\\\\" border=\\\\\"0\\\\\" /></a></td>\r\n<td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\">\r\n<tr>\r\n          <td width=\\\\\"80%\\\\\" height=\\\\\"26\\\\\" style=\\\\\"font-size:14px\\\\\"><strong><a href=\\\\\"[!--titleurl--]\\\\\">[!--title--]</a></strong> \r\n            <img src=\\\\\"[!--news.url--]e/data/images/[!--star--]star.gif\\\\\" alt=\\\\\"�Ƽ�ָ��[!--star--]����\\\\\" border=\\\\\"0\\\\\" align=\\\\\"absmiddle\\\\\" /></td>\r\n          <td width=\\\\\"20%\\\\\"> \r\n            <div align=\\\\\"right\\\\\">[!--newstime--]</div></td>\r\n</tr>\r\n<tr>\r\n<td colspan=\\\\\"2\\\\\"><strong>�����</strong>2008����<strong>��Ʒ��˾��</strong>[!--company--]</td>\r\n</tr>\r\n<tr>\r\n	<td height=\\\\\"26\\\\\" colspan=\\\\\"2\\\\\"><strong>���ݣ�</strong>[!--playadmin--]</td>\r\n</tr>\r\n<tr>\r\n	<td height=\\\\\"26\\\\\" colspan=\\\\\"2\\\\\"><strong>���ݣ�</strong>[!--player--]</td>\r\n</tr>\r\n<tr>\r\n	<td height=\\\\\"26\\\\\" colspan=\\\\\"2\\\\\"><strong>���ͣ�</strong>[!--movietype--]</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\\\\\"2\\\\\"><strong>ӰƬ��飺</strong>[!--moviesay--] [<a title=\\\\\"�Ķ�ȫ��\\\\\" href=\\\\\"[!--titleurl--]\\\\\">��ϸ����</a>]</td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>','1','5','Y-m-d','0','0','0');");
E_D("replace into `phome_enewslisttemp` values('9','tiaotiao�����б�','<!doctype html>\r\n<html>\r\n<head>\r\n    <link rel=\\\\\"alternate\\\\\" media=\\\\\"only screen and (max-width: 640px)\\\\\" href=\\\\\"<?=\$public_r[\\\\''add_wapurl\\\\'']?>/[e:loop={\\\\\"select bname from phome_enewsclass where classid=\\\\''\$GLOBALS[navclassid]\\\\''\\\\\",1,24,0}]<?=\$bqr[bname]?>[/e:loop]\\\\\" >\r\n    <meta charset=\\\\\"gb2312\\\\\" />\r\n    <meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=gb2312\\\\\">\r\n    <meta http-equiv=\\\\\"X-UA-Compatible\\\\\" content=\\\\\"IE=edge,chrome=1\\\\\">\r\n    <meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui\\\\\">\r\n<script src=\\\\\"http://siteapp.baidu.com/static/webappservice/uaredirect.js\\\\\" type=\\\\\"text/javascript\\\\\"></script><script type=\\\\\"text/javascript\\\\\">uaredirect(\\\\\"<?=\$public_r[\\\\''add_wapurl\\\\'']?>/[e:loop={\\\\\"select bname from phome_enewsclass where classid=\\\\''\$GLOBALS[navclassid]\\\\''\\\\\",1,24,0}]<?=\$bqr[bname]?>[/e:loop]\\\\\");</script>\r\n<script src=\\\\\"[!--news.url--]e/data/js/ajax.js\\\\\">    \r\n<script type=\\\\\"text/javascript\\\\\">\r\n        if(!(\\\\''console\\\\'' in window)) {window.console = {log: function(msg) {}};}\r\n    </script>\r\n    <link rel=\\\\\"shortcut icon\\\\\" href=\\\\\"[!--news.url--]favicon.ico\\\\\" type=\\\\\"image/x-icon\\\\\">\r\n    <link type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" href=\\\\\"[!--news.url--]style/nbase_cf47e58.css\\\\\">\r\n\r\n\r\n    \r\n    \r\n    <title><?=\$public_r[\\\\''add_sitetitle\\\\'']?>[!--pagetitle--]Ƶ�� - <?=\$public_r[\\\\''add_ftitle\\\\'']?></title>\r\n    <meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\">\r\n    <meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\">\r\n    \r\n    \r\n\r\n    <link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]style/core_b666bd6.css\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]style/newindex_b0deca1.css\\\\\">\r\n<script type=\\\\\"text/javascript\\\\\" charset=\\\\\"gb2312\\\\\" src=\\\\\"[!--news.url--]style/lib_538033e.js\\\\\"></script>\r\n\r\n<script>\r\nvar curpage = 2;\r\nvar totalpage = <?php \$num=\$empire->gettotal(\\\\\"select count(*) as total from {\$dbtbpre}ecms_news where classid=\\\\\".\$bclassid=\$GLOBALS[navclassid].\\\\\"\\\\\"); echo \$totalpage=ceil(\$num/10);?>;\r\nvar geturl = \\\\''/e/extend/list/?classid=[!--self.classid--]&orderby=newstime&page=\\\\''; \r\n</script>\r\n<script>\r\n\$(function(){\r\n	\$(\\\\''.listBox li\\\\'').each(function(i,k){\r\n		if(\$(k).find(\\\\''.lbox a img\\\\'').attr(\\\\''src\\\\'')==\\\\''/e/data/images/notimg.gif\\\\''){\r\n			\$(k).find(\\\\''.lbox\\\\'').remove();\r\n			\$(k).find(\\\\''.rbox\\\\'').removeClass(\\\\''rbox\\\\'');\r\n		}\r\n	});\r\n})\r\n</script>\r\n<script type=\\\\\"text/javascript\\\\\" charset=\\\\\"gb2312\\\\\" src=\\\\\"[!--news.url--]style/scrollpagination.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"v2016\\\\\">\r\n    \r\n    <div id=\\\\\"wrapper\\\\\" class=\\\\\"index-wrapper\\\\\">\r\n    <div id=\\\\\"pagelet-nnav\\\\\" >\r\n	[!--temp.header--]\r\n	</div>\r\n\r\n        <div id=\\\\\"container\\\\\" class=\\\\\"clearfix\\\\\">\r\n            [!--temp.left2--]\r\n            <div class=\\\\\"index-main\\\\\">\r\n                <div id=\\\\\"pagelet-nfeedlist\\\\\">\r\n	<div class=\\\\\"feedcomm\\\\\" data-node=\\\\\"commItem\\\\\">\r\n		<span class=\\\\\"comm-close\\\\\" data-node=\\\\\"commClose\\\\\"></span>\r\n		<a ga_event=\\\\\"click_banner\\\\\" target=\\\\\"_blank\\\\\" data-node=\\\\\"commLink\\\\\"></a>\r\n	</div>\r\n	<p class=\\\\\"alert-msg\\\\\" data-node=\\\\\"alertMsg\\\\\">\r\n        <img src=\\\\\"<?=\$public_r[\\\\''add_siteurl\\\\'']?>/style/loading_50c5e3e.gif\\\\\">\r\n        <span>�Ƽ����ݼ�����...</span>\r\n    </p>\r\n	<div class=\\\\\"unread\\\\\" data-node=\\\\\"unread\\\\\" ga_event=\\\\\"click_feed_update\\\\\"><span>����δ�����ţ�����鿴</span></div>\r\n	<ul data-node=\\\\\"listBox\\\\\" class=\\\\\"listBox\\\\\">\r\n		[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]\r\n	</ul>\r\n	<a href=\\\\\"javascript:;\\\\\" class=\\\\\"loadmore\\\\\" data-node=\\\\\"loadMore\\\\\">����Ϊ�����ظ���...</a>\r\n        <div class=\\\\\"indexListLoading\\\\\" id=\\\\\"nomoreresults\\\\\" style=\\\\\"display:none\\\\\">�������ݼ������</div>\r\n\r\n         <div class=\\\\\"pageBox pageNo\\\\\">\r\n          [!--show.listpage--]\r\n         </div>\r\n</div>\r\n            </div>\r\n            <div class=\\\\\"index-right\\\\\">\r\n                <div id=\\\\\"pagelet-weather\\\\\">\r\n					<iframe allowtransparency=\\\\\"true\\\\\" frameborder=\\\\\"0\\\\\" width=\\\\\"250\\\\\" height=\\\\\"98\\\\\" scrolling=\\\\\"no\\\\\" src=\\\\\"http://tianqi.2345.com/plugin/widget/index.htm?s=2&z=1&t=1&v=0&d=1&bd=0&k=000000&f=&q=1&e=1&a=1&c=54511&w=250&h=98&align=center\\\\\"></iframe>\r\n				</div>\r\n\r\n                \r\n                <div id=\\\\\"pagelet-commbox\\\\\">\r\n					<!--<a ga_event=\\\\\"click_banner\\\\\" class=\\\\\"img-box\\\\\" target=\\\\\"_blank\\\\\" data-node=\\\\\"link\\\\\">\r\n						<img data-node=\\\\\"img\\\\\" onload=\\\\\"this.style.opacity=1\\\\\">\r\n					</a>\r\n					<span class=\\\\\"comm-label\\\\\">�ƹ�</span>-->\r\n					<!--���λ �Ҳ�250x250_1 start-->\r\n					<script src=\\\\\"/d/js/acmsd/thea1.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n					<!--���λ �Ҳ�250x250_1 end-->\r\n				</div>\r\n\r\n                <div id=\\\\\"pagelet-hotnews\\\\\">\r\n					<div class=\\\\\"head\\\\\">\r\n					  ʵʱҪ��\r\n					</div>\r\n					<div class=\\\\\"news\\\\\">\r\n						[e:loop={\\\\\"selfinfo\\\\\",10,1,0,\\\\\"date_format(from_UNIXTIME(newstime),\\\\''%Y-%m\\\\'') = date_format(now(),\\\\''%Y-%m\\\\'')\\\\\",\\\\\"onclick DESC\\\\\"}]\r\n						<a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" target=\\\\\"_blank\\\\\" title=\\\\\"\\\\\"><?=\$bqr[\\\\''title\\\\'']?></a>\r\n						[/e:loop]\r\n					</div>\r\n				</div>\r\n\r\n                <div id=\\\\\"pagelet-stock\\\\\">\r\n				  <div class=\\\\\"stock_head\\\\\">\r\n					\r\n				  </div>\r\n				</div>\r\n\r\n                [!--temp.footer--]\r\n\r\n            </div>\r\n            <div id=\\\\\"pagelet-nfeedback\\\\\">\r\n				<ul>\r\n					<li>\r\n						<a ga_event=\\\\\"click_feed_newsrefresh\\\\\" class=\\\\\"refresh\\\\\" href=\\\\\"javascript:;\\\\\" data-node=\\\\\"refresh\\\\\"></a>\r\n						<!--<a ga_event=\\\\\"gotop\\\\\" class=\\\\\"btn\\\\\" href=\\\\\"javascript:;\\\\\" data-node=\\\\\"back\\\\\">\r\n							<i class=\\\\\"icon icon-back\\\\\"></i>\r\n						</a>-->\r\n					</li>\r\n					<!--<li>\r\n						<a ga_event=\\\\\"feedback\\\\\" class=\\\\\"btn\\\\\" href=\\\\\"javascript:;\\\\\" data-node=\\\\\"feedback\\\\\">\r\n							<i class=\\\\\"icon icon-comment\\\\\"></i>\r\n						</a>\r\n					</li>-->\r\n				</ul>\r\n			</div>\r\n        </div>\r\n    </div>\r\n    <script>\r\n        window.scrollTo(0, 0);\r\n\r\n        window.gaqpush = function (ga_action, ga_label){\r\n            ga(\\\\''send\\\\'', \\\\''event\\\\'',\\\\''/\\\\'' , ga_action, ga_label);\r\n        };\r\n\r\n        (function(i,s,o,g,r,a,m){i[\\\\''GoogleAnalyticsObject\\\\'']=r;i[r]=i[r]||function(){\r\n        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\r\n        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\r\n        })(window,document,\\\\''script\\\\'',\\\\''//www.google-analytics.com/analytics.js\\\\'',\\\\''ga\\\\'');\r\n\r\n        ga(\\\\''create\\\\'', \\\\''UA-28423340-5\\\\'', \\\\''auto\\\\'');\r\n        ga(\\\\''send\\\\'', \\\\''pageview\\\\'');\r\n\r\n\r\n        \$(\\\\\"body\\\\\").on(\\\\''click\\\\'', \\\\''[ga_event]\\\\'', function(e){\r\n             var \$this =  \$(this);\r\n             var ga_category = \$this.attr(\\\\''ga_category\\\\'') || \\\\''/\\\\'';\r\n             var ga_action = \$this.attr(\\\\''ga_event\\\\'');\r\n             var ga_label = \$this.attr(\\\\''ga_label\\\\'');\r\n             var ga_value = \$this.attr(\\\\''ga_value\\\\'')||1;\r\n\r\n             ga(\\\\''send\\\\'', \\\\''event\\\\'', ga_category, ga_action, ga_label, ga_value);\r\n        });\r\n\r\n    </script>\r\n\r\n    <script>\r\n        window.scrollTo(0, 0);\r\n		\$(document).scroll(function() {\r\n			var scrolltop=\$(document).scrollTop();\r\n			if(scrolltop>1200){\r\n				\$(\\\\''#pagelet-commbox\\\\'').css({\\\\''position\\\\'':\\\\''fixed\\\\'',\\\\''top\\\\'':\\\\''100px\\\\''});\r\n			}else{\r\n				\$(\\\\''#pagelet-commbox\\\\'').css({\\\\''position\\\\'':\\\\''\\\\'',\\\\''top\\\\'':\\\\''\\\\''});\r\n			}\r\n			if(scrolltop>30){\r\n				\$(\\\\''.topbarWrapper\\\\'').css({\\\\''height\\\\'':\\\\''4px\\\\''});\r\n			}else{\r\n				\$(\\\\''.topbarWrapper\\\\'').css({\\\\''height\\\\'':\\\\''24px\\\\''});\r\n			}\r\n		});\r\n\r\n        \r\n    </script>\r\n<script src=\\\\\"[!--news.url--]e/extend/DoTimeRepage/\\\\\"></script>\r\n</body>\r\n</html>\r\n','0','0','<li class=\\\\\"item clearfix\\\\\" data-node=\\\\\"item\\\\\">\r\n	\r\n			<div class=\\\\\"item-inner\\\\\" >\r\n				<div class=\\\\\"lbox left\\\\\">\r\n					<a href=\\\\\"[!--titleurl--]\\\\\" target=\\\\\"_blank\\\\\">\r\n						<img class=\\\\\"feedimg\\\\\" src=\\\\\"[!--titlepic--]\\\\\" onload=\\\\\"this.style.opacity=1;\\\\\" style=\\\\\"opacity: 1;\\\\\">\r\n					</a>\r\n				</div>\r\n				<div class=\\\\\"rbox\\\\\"><!--hold-->\r\n					<div class=\\\\\"rbox-inner\\\\\">\r\n					\r\n						<div class=\\\\\"title-box\\\\\">\r\n							<a ga_event=\\\\\"click_feed_newstitle\\\\\" class=\\\\\"link title\\\\\" href=\\\\\"[!--titleurl--]\\\\\" target=\\\\\"_blank\\\\\" data-node=\\\\\"title\\\\\">\r\n								[!--title--]\r\n							</a>\r\n						</div>\r\n						<div class=\\\\\"abstract\\\\\">\r\n							<a ga_event=\\\\\"click_feed_newsabstract\\\\\" class=\\\\\"link\\\\\" href=\\\\\"[!--titleurl--]\\\\\" target=\\\\\"_blank\\\\\">[!--smalltext--]</a>\r\n						</div>\r\n						<div class=\\\\\"footer clearfix\\\\\">\r\n							<div class=\\\\\"left lfooter\\\\\">\r\n								<a class=\\\\\"lbtn source\\\\\" href=\\\\\"javascript:;\\\\\">[!--befrom--]&nbsp;</a>\r\n								<span class=\\\\\"lbtn comment\\\\\"></span>\r\n								<span class=\\\\\"lbtn time\\\\\">[!--newstime--]</span>\r\n							</div>\r\n							<div class=\\\\\"right rfooter\\\\\">\r\n								\r\n								<span data-node=\\\\\"likeGroup\\\\\" class=\\\\\"\\\\\">\r\n								\r\n									<a class=\\\\\"rbtn bury\\\\\" href=\\\\\"javascript:;\\\\\" title=\\\\\"��\\\\\" onclick=\\\\\"makeRequest(\\\\''[!--news.url--]e/public/digg?classid=[!--classid--]&id=[!--id--]&dotop=1&doajax=1&ajaxarea=diggnum\\\\'',\\\\''EchoReturnedText\\\\'',\\\\''GET\\\\'',\\\\''\\\\'');\\\\\"></a>\r\n									<a class=\\\\\"rbtn digg\\\\\" href=\\\\\"javascript:;\\\\\" title=\\\\\"��\\\\\" onclick=\\\\\"makeRequest(\\\\''[!--news.url--]e/public/digg?classid=[!--classid--]&id=[!--id--]&dotop=0&doajax=1&ajaxarea=diggnum\\\\'',\\\\''EchoReturnedText\\\\'',\\\\''GET\\\\'',\\\\''\\\\'');\\\\\"></a>\r\n								</span>\r\n							</div>\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</li>','1','1','Y-m-d','0','0','0');");
E_D("replace into `phome_enewslisttemp` values('10','tiaotiao TAGS�б�ģ��','<!doctype html>\r\n<html>\r\n<head>\r\n    <link rel=\\\\\"alternate\\\\\" media=\\\\\"only screen and (max-width: 640px)\\\\\" href=\\\\\"<?=\$public_r[\\\\''add_wapurl\\\\'']?>/[e:loop={\\\\\"select bname from phome_enewsclass where classid=\\\\''\$GLOBALS[navclassid]\\\\''\\\\\",1,24,0}]<?=\$bqr[bname]?>[/e:loop]\\\\\" >\r\n    <meta charset=\\\\\"gb2312\\\\\" />\r\n    <meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=gb2312\\\\\">\r\n    <meta http-equiv=\\\\\"X-UA-Compatible\\\\\" content=\\\\\"IE=edge,chrome=1\\\\\">\r\n    <meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui\\\\\">\r\n<script src=\\\\\"http://siteapp.baidu.com/static/webappservice/uaredirect.js\\\\\" type=\\\\\"text/javascript\\\\\"><script type=\\\\\"text/javascript\\\\\">uaredirect(\\\\\"<?=\$public_r[\\\\''add_wapurl\\\\'']?>/[e:loop={\\\\\"select bname from phome_enewsclass where classid=\\\\''\$GLOBALS[navclassid]\\\\''\\\\\",1,24,0}]<?=\$bqr[bname]?>[/e:loop]\\\\\");</script>\r\n    <script type=\\\\\"text/javascript\\\\\">\r\n        if(!(\\\\''console\\\\'' in window)) {window.console = {log: function(msg) {}};}\r\n    </script>\r\n    <link rel=\\\\\"shortcut icon\\\\\" href=\\\\\"[!--news.url--]favicon.ico\\\\\" type=\\\\\"image/x-icon\\\\\">\r\n    <link type=\\\\\"text/css\\\\\" rel=\\\\\"stylesheet\\\\\" href=\\\\\"[!--news.url--]style/nbase_cf47e58.css\\\\\">\r\n\r\n\r\n    \r\n    \r\n    <title>����\\\\\"[!--pagetitle--]\\\\\"������ - <?=\$public_r[\\\\''add_sitetitle\\\\'']?></title>\r\n    <meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\">\r\n    <meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\">\r\n    \r\n    \r\n\r\n    <link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]style/core_b666bd6.css\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]style/newindex_b0deca1.css\\\\\">\r\n<script type=\\\\\"text/javascript\\\\\" charset=\\\\\"gb2312\\\\\" src=\\\\\"[!--news.url--]style/lib_538033e.js\\\\\"></script>\r\n\r\n<script>\r\nvar curpage = 2;\r\nvar totalpage = <?php \$num=\$empire->gettotal(\\\\\"select count(*) as total from {\$dbtbpre}ecms_news where classid=\\\\\".\$bclassid=\$GLOBALS[navclassid].\\\\\"\\\\\"); echo \$totalpage=ceil(\$num/10);?>;\r\nvar geturl = \\\\''/e/extend/list/?classid=[!--self.classid--]&orderby=newstime&page=\\\\''; \r\n</script>\r\n\r\n<script type=\\\\\"text/javascript\\\\\" charset=\\\\\"gb2312\\\\\" src=\\\\\"[!--news.url--]style/scrollpagination.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"v2016\\\\\">\r\n    \r\n    <div id=\\\\\"wrapper\\\\\" class=\\\\\"index-wrapper\\\\\">\r\n    <div id=\\\\\"pagelet-nnav\\\\\" >\r\n	[!--temp.header--]\r\n	</div>\r\n\r\n        <div id=\\\\\"container\\\\\" class=\\\\\"clearfix\\\\\">\r\n            [!--temp.left2--]\r\n            <div class=\\\\\"index-main\\\\\">\r\n                <div id=\\\\\"pagelet-nfeedlist\\\\\">\r\n	<div class=\\\\\"feedcomm\\\\\" data-node=\\\\\"commItem\\\\\">\r\n		<span class=\\\\\"comm-close\\\\\" data-node=\\\\\"commClose\\\\\"></span>\r\n		<a ga_event=\\\\\"click_banner\\\\\" target=\\\\\"_blank\\\\\" data-node=\\\\\"commLink\\\\\"></a>\r\n	</div>\r\n	<p class=\\\\\"alert-msg\\\\\" data-node=\\\\\"alertMsg\\\\\">\r\n        <img src=\\\\\"<?=\$public_r[\\\\''add_siteurl\\\\'']?>/style/loading_50c5e3e.gif\\\\\">\r\n        <span>�Ƽ����ݼ�����...</span>\r\n    </p>\r\n	<div class=\\\\\"unread\\\\\" data-node=\\\\\"unread\\\\\" ga_event=\\\\\"click_feed_update\\\\\"><span>����δ�����ţ�����鿴</span></div>\r\n	<ul data-node=\\\\\"listBox\\\\\" class=\\\\\"listBox\\\\\">\r\n		[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]\r\n	</ul>\r\n	<a href=\\\\\"javascript:;\\\\\" class=\\\\\"loadmore\\\\\" data-node=\\\\\"loadMore\\\\\">����Ϊ�����ظ���...</a>\r\n        <div class=\\\\\"indexListLoading\\\\\" id=\\\\\"nomoreresults\\\\\" style=\\\\\"display:none\\\\\">�������ݼ������</div>\r\n\r\n         <div class=\\\\\"pageBox pageNo\\\\\">\r\n          [!--show.listpage--]\r\n         </div>\r\n</div>\r\n            </div>\r\n            <div class=\\\\\"index-right\\\\\">\r\n                <div id=\\\\\"pagelet-weather\\\\\">\r\n					<iframe allowtransparency=\\\\\"true\\\\\" frameborder=\\\\\"0\\\\\" width=\\\\\"250\\\\\" height=\\\\\"98\\\\\" scrolling=\\\\\"no\\\\\" src=\\\\\"http://tianqi.2345.com/plugin/widget/index.htm?s=2&z=1&t=1&v=0&d=1&bd=0&k=000000&f=&q=1&e=1&a=1&c=54511&w=250&h=98&align=center\\\\\"></iframe>\r\n				</div>\r\n\r\n                \r\n                <div id=\\\\\"pagelet-commbox\\\\\">\r\n					<!--<a ga_event=\\\\\"click_banner\\\\\" class=\\\\\"img-box\\\\\" target=\\\\\"_blank\\\\\" data-node=\\\\\"link\\\\\">\r\n						<img data-node=\\\\\"img\\\\\" onload=\\\\\"this.style.opacity=1\\\\\">\r\n					</a>\r\n					<span class=\\\\\"comm-label\\\\\">�ƹ�</span>-->\r\n					<!--���λ �Ҳ�250x250_1 start-->\r\n					<script src=\\\\\"/d/js/acmsd/thea1.js\\\\\" type=\\\\\"text/javascript\\\\\"></script>\r\n					<!--���λ �Ҳ�250x250_1 end-->\r\n				</div>\r\n\r\n                <div id=\\\\\"pagelet-hotnews\\\\\">\r\n					<div class=\\\\\"head\\\\\">\r\n					  ʵʱҪ��\r\n					</div>\r\n					<div class=\\\\\"news\\\\\">\r\n						[e:loop={\\\\''news\\\\'',10,3,0,\\\\\"date_format(from_UNIXTIME(newstime),\\\\''%Y-%m\\\\'') = date_format(now(),\\\\''%Y-%m\\\\'')\\\\\",\\\\\"onclick DESC\\\\\"}]\r\n						<a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" target=\\\\\"_blank\\\\\" title=\\\\\"\\\\\"><?=\$bqr[\\\\''title\\\\'']?></a>\r\n						[/e:loop]\r\n					</div>\r\n				</div>\r\n\r\n                <div id=\\\\\"pagelet-stock\\\\\">\r\n				  <div class=\\\\\"stock_head\\\\\">\r\n					\r\n				  </div>\r\n				</div>\r\n\r\n                [!--temp.footer--]\r\n\r\n            </div>\r\n            <div id=\\\\\"pagelet-nfeedback\\\\\">\r\n				<ul>\r\n					<li>\r\n						<a ga_event=\\\\\"click_feed_newsrefresh\\\\\" class=\\\\\"refresh\\\\\" href=\\\\\"javascript:;\\\\\" data-node=\\\\\"refresh\\\\\"></a>\r\n						<!--<a ga_event=\\\\\"gotop\\\\\" class=\\\\\"btn\\\\\" href=\\\\\"javascript:;\\\\\" data-node=\\\\\"back\\\\\">\r\n							<i class=\\\\\"icon icon-back\\\\\"></i>\r\n						</a>-->\r\n					</li>\r\n					<!--<li>\r\n						<a ga_event=\\\\\"feedback\\\\\" class=\\\\\"btn\\\\\" href=\\\\\"javascript:;\\\\\" data-node=\\\\\"feedback\\\\\">\r\n							<i class=\\\\\"icon icon-comment\\\\\"></i>\r\n						</a>\r\n					</li>-->\r\n				</ul>\r\n			</div>\r\n        </div>\r\n    </div>\r\n    <script>\r\n        window.scrollTo(0, 0);\r\n\r\n        window.gaqpush = function (ga_action, ga_label){\r\n            ga(\\\\''send\\\\'', \\\\''event\\\\'',\\\\''/\\\\'' , ga_action, ga_label);\r\n        };\r\n\r\n        (function(i,s,o,g,r,a,m){i[\\\\''GoogleAnalyticsObject\\\\'']=r;i[r]=i[r]||function(){\r\n        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\r\n        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\r\n        })(window,document,\\\\''script\\\\'',\\\\''//www.google-analytics.com/analytics.js\\\\'',\\\\''ga\\\\'');\r\n\r\n        ga(\\\\''create\\\\'', \\\\''UA-28423340-5\\\\'', \\\\''auto\\\\'');\r\n        ga(\\\\''send\\\\'', \\\\''pageview\\\\'');\r\n\r\n\r\n        \$(\\\\\"body\\\\\").on(\\\\''click\\\\'', \\\\''[ga_event]\\\\'', function(e){\r\n             var \$this =  \$(this);\r\n             var ga_category = \$this.attr(\\\\''ga_category\\\\'') || \\\\''/\\\\'';\r\n             var ga_action = \$this.attr(\\\\''ga_event\\\\'');\r\n             var ga_label = \$this.attr(\\\\''ga_label\\\\'');\r\n             var ga_value = \$this.attr(\\\\''ga_value\\\\'')||1;\r\n\r\n             ga(\\\\''send\\\\'', \\\\''event\\\\'', ga_category, ga_action, ga_label, ga_value);\r\n        });\r\n\r\n    </script>\r\n\r\n    <script>\r\n        window.scrollTo(0, 0);\r\n		\$(document).scroll(function() {\r\n			var scrolltop=\$(document).scrollTop();\r\n			if(scrolltop>1200){\r\n				\$(\\\\''#pagelet-commbox\\\\'').css({\\\\''position\\\\'':\\\\''fixed\\\\'',\\\\''top\\\\'':\\\\''100px\\\\''});\r\n			}else{\r\n				\$(\\\\''#pagelet-commbox\\\\'').css({\\\\''position\\\\'':\\\\''\\\\'',\\\\''top\\\\'':\\\\''\\\\''});\r\n			}\r\n		});\r\n\r\n        \r\n    </script>\r\n\r\n</body>\r\n</html>\r\n','0','0','<li class=\\\\\"item clearfix\\\\\" data-node=\\\\\"item\\\\\">\r\n	\r\n			<div class=\\\\\"item-inner\\\\\">\r\n				<div class=\\\\\"lbox left\\\\\">\r\n					<a href=\\\\\"[!--titleurl--]\\\\\" target=\\\\\"_blank\\\\\">\r\n						<img class=\\\\\"feedimg\\\\\" src=\\\\\"[!--titlepic--]\\\\\" onload=\\\\\"this.style.opacity=1;\\\\\" style=\\\\\"opacity: 1;\\\\\">\r\n					</a>\r\n				</div>\r\n				<div class=\\\\\"rbox\\\\\"><!--hold-->\r\n					<div class=\\\\\"rbox-inner\\\\\">\r\n					\r\n						<div class=\\\\\"title-box\\\\\">\r\n							<a ga_event=\\\\\"click_feed_newstitle\\\\\" class=\\\\\"link title\\\\\" href=\\\\\"[!--titleurl--]\\\\\" target=\\\\\"_blank\\\\\" data-node=\\\\\"title\\\\\">\r\n								[!--title--]\r\n							</a>\r\n						</div>\r\n						<div class=\\\\\"abstract\\\\\">\r\n							<a ga_event=\\\\\"click_feed_newsabstract\\\\\" class=\\\\\"link\\\\\" href=\\\\\"[!--titleurl--]\\\\\" target=\\\\\"_blank\\\\\">[!--smalltext--]</a>\r\n						</div>\r\n						<div class=\\\\\"footer clearfix\\\\\">\r\n							<div class=\\\\\"left lfooter\\\\\">\r\n								<a class=\\\\\"lbtn source\\\\\" href=\\\\\"javascript:;\\\\\">[!--befrom--]&nbsp;</a>\r\n								<span class=\\\\\"lbtn comment\\\\\"></span>\r\n								<span class=\\\\\"lbtn time\\\\\">[!--newstime--]</span>\r\n							</div>\r\n							<div class=\\\\\"right rfooter\\\\\">\r\n								<a class=\\\\\"rbtn share\\\\\" href=\\\\\"javascript:;\\\\\" data-node=\\\\\"share\\\\\" data-url=\\\\\"<?=\$public_r[\\\\''add_siteurl\\\\'']?>/[!--titleurl--]\\\\\" data-desc=\\\\\"���� <?=\$public_r[\\\\''add_siteurl\\\\'']?>\\\\\" data-text=\\\\\"��[!--title--]������������ @<?=\$public_r[\\\\''add_sitetitle\\\\'']?>��[!--smalltext--]\\\\\" data-pic=\\\\\"[!--titlepic--]\\\\\">\r\n									<span class=\\\\\"share-list\\\\\">\r\n										<i ga_event=\\\\\"click_feed_share\\\\\" ga_label=\\\\\"tsina\\\\\" data-type=\\\\\"tsina\\\\\" class=\\\\\"icon icon-tsina\\\\\" href=\\\\\"javascript:;\\\\\" title=\\\\\"����������΢��\\\\\"></i>\r\n										<i ga_event=\\\\\"click_feed_share\\\\\" ga_label=\\\\\"tqq\\\\\" data-type=\\\\\"tqq\\\\\" class=\\\\\"icon icon-tqq\\\\\" href=\\\\\"javascript:;\\\\\" title=\\\\\"��������Ѷ΢��\\\\\"></i>\r\n										<i ga_event=\\\\\"click_feed_share\\\\\" ga_label=\\\\\"qzone\\\\\" data-type=\\\\\"qzone\\\\\" class=\\\\\"icon icon-qzone\\\\\" href=\\\\\"javascript:;\\\\\" title=\\\\\"�������ѣѿռ�\\\\\"></i>\r\n									</span>\r\n								</a>\r\n								\r\n								<span data-node=\\\\\"likeGroup\\\\\" class=\\\\\"\\\\\">\r\n								\r\n									<a ga_event=\\\\\"click_feed_dislike\\\\\" class=\\\\\"rbtn bury\\\\\" href=\\\\\"javascript:;\\\\\" title=\\\\\"��\\\\\" data-node=\\\\\"bury\\\\\" data-groupid=\\\\\"6251522160470376705\\\\\"></a>\r\n									<a ga_event=\\\\\"click_feed_like\\\\\" class=\\\\\"rbtn digg\\\\\" href=\\\\\"javascript:;\\\\\" title=\\\\\"��\\\\\" data-node=\\\\\"digg\\\\\" data-groupid=\\\\\"6251522160470376705\\\\\"></a>\r\n								</span>\r\n							</div>\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</li>','1','1','Y-m-d','0','0','1');");

@include("../../inc/footer.php");
?>