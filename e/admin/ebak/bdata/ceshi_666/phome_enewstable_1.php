<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstable`;");
E_C("CREATE TABLE `phome_enewstable` (
  `tid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tname` varchar(60) NOT NULL DEFAULT '',
  `tsay` text NOT NULL,
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `datatbs` text NOT NULL,
  `deftb` varchar(6) NOT NULL DEFAULT '',
  `yhid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `intb` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewstable` values('1','news','����ϵͳ���ݱ�','����ϵͳ���ݱ�','1',',1,','1','0','1','0');");
E_D("replace into `phome_enewstable` values('3','photo','ͼƬϵͳ���ݱ�','ͼƬϵͳ���ݱ�','0',',1,','1','0','3','0');");
E_D("replace into `phome_enewstable` values('5','movie','��Ӱϵͳ���ݱ�','��Ӱϵͳ���ݱ�','0',',1,','1','0','5','0');");

@include("../../inc/footer.php");
?>