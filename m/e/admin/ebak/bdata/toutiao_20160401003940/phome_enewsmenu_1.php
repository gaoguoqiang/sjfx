<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmenu`;");
E_C("CREATE TABLE `phome_enewsmenu` (
  `menuid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menuname` varchar(60) NOT NULL DEFAULT '',
  `menuurl` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `addhash` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`menuid`),
  KEY `myorder` (`myorder`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsmenu` values('1','����֧��','http://gouso.taobao.com','0','1','0');");
E_D("replace into `phome_enewsmenu` values('2','�۹���վ����QQ86063487','javascript:;','0','1','0');");
E_D("replace into `phome_enewsmenu` values('3','��������','http://www.unwang.com','0','1','0');");

@include("../../inc/footer.php");
?>