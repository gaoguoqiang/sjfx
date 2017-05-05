<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsgbook`;");
E_C("CREATE TABLE `phome_enewsgbook` (
  `lyid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `lytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lytext` text NOT NULL,
  `retext` text NOT NULL,
  `bid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `eipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`lyid`),
  KEY `bid` (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsgbook` values('1','匿名','123@qq.com','','2016-03-30 20:51:50','123123123123','','1','127.0.0.1','1','0','','57609');");
E_D("replace into `phome_enewsgbook` values('2','匿名','123123@qq.com','','2016-03-30 21:05:29','123123','','1','127.0.0.1','1','0','','58338');");
E_D("replace into `phome_enewsgbook` values('3','匿名','86063487@qq.com','','2016-03-30 21:09:07','TESTTEST','','1','127.0.0.1','1','0','','58592');");
E_D("replace into `phome_enewsgbook` values('4','匿名','86063487@qq.com','','2016-03-30 21:09:44','13123123','','1','127.0.0.1','1','0','','58627');");

@include("../../inc/footer.php");
?>