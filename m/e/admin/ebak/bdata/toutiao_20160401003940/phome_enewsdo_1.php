<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsdo`;");
E_C("CREATE TABLE `phome_enewsdo` (
  `doid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `doname` varchar(60) NOT NULL DEFAULT '',
  `dotime` smallint(6) NOT NULL DEFAULT '0',
  `isopen` tinyint(1) NOT NULL DEFAULT '0',
  `doing` tinyint(4) NOT NULL DEFAULT '0',
  `classid` text NOT NULL,
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`doid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsdo` values('1','30�����Զ�ˢ����ҳ','30','0','0',',','1273215883');");
E_D("replace into `phome_enewsdo` values('2','60����ˢ����Ŀҳ','60','1','1',',1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,','1459442358');");

@include("../../inc/footer.php");
?>