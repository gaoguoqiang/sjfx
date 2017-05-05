<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1244 DEFAULT CHARSET=gbk");
E_D("replace into `phome_ecms_news_index` values('1','20','1','1459344008','1459344078','1459345017','1');");
E_D("replace into `phome_ecms_news_index` values('2','20','1','1459345059','1459345102','1459345102','1');");
E_D("replace into `phome_ecms_news_index` values('3','20','1','1459345104','1459345175','1459345175','1');");
E_D("replace into `phome_ecms_news_index` values('4','20','1','1459345178','1459345211','1459345211','1');");
E_D("replace into `phome_ecms_news_index` values('5','20','1','1459345213','1459345245','1459345245','1');");
E_D("replace into `phome_ecms_news_index` values('6','20','1','1459345247','1459345279','1459345279','1');");
E_D("replace into `phome_ecms_news_index` values('7','20','1','1459345281','1459345315','1459345315','1');");
E_D("replace into `phome_ecms_news_index` values('8','20','1','1459345317','1459345349','1459345349','1');");
E_D("replace into `phome_ecms_news_index` values('9','20','1','1459345352','1459345378','1459345378','1');");

@include("../../inc/footer.php");
?>