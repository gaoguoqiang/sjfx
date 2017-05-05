<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewslog` values('1','admin','2016-03-29 19:23:06','127.0.0.1','1','','0','55950');");
E_D("replace into `phome_enewslog` values('2','admin','2016-03-30 01:05:57','127.0.0.1','1','','0','57638');");
E_D("replace into `phome_enewslog` values('3','admin','2016-03-30 18:39:22','127.0.0.1','1','','0','50323');");
E_D("replace into `phome_enewslog` values('4','admin','2016-03-31 18:36:32','127.0.0.1','1','','0','64150');");
E_D("replace into `phome_enewslog` values('5','admin','2016-03-31 20:36:35','127.0.0.1','1','','0','55777');");
E_D("replace into `phome_enewslog` values('6','admin','2016-03-31 23:51:25','127.0.0.1','1','','0','49856');");
E_D("replace into `phome_enewslog` values('7','admin','2016-04-01 00:21:14','127.0.0.1','1','','0','51778');");

@include("../../inc/footer.php");
?>