<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclass`;");
E_C("CREATE TABLE `phome_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsclass` values('1','0','�ȵ�','','0','25','10','1','0','9','','1','news_hot','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_hot','1','1','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','1','','0','0','0','','0','0','0','0','1459250677');");
E_D("replace into `phome_enewsclass` values('2','0','���','','0','25','10','1','0','9','','1','news_society','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_society','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459250841');");
E_D("replace into `phome_enewsclass` values('3','0','����','','0','25','10','1','0','9','','1','news_entertainment','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_entertainment','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459252601');");
E_D("replace into `phome_enewsclass` values('4','0','�Ƽ�','','0','25','10','1','0','9','','1','news_tech','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_tech','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334400');");
E_D("replace into `phome_enewsclass` values('5','0','����','','0','25','10','1','0','9','','1','news_car','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_car','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334418');");
E_D("replace into `phome_enewsclass` values('6','0','����','','0','25','10','1','0','9','','1','news_sports','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_sports','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334437');");
E_D("replace into `phome_enewsclass` values('7','0','�ƾ�','','0','25','10','1','0','9','','1','news_finance','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_finance','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334456');");
E_D("replace into `phome_enewsclass` values('8','0','����','','0','25','10','1','0','9','','1','news_military','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_military','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334473');");
E_D("replace into `phome_enewsclass` values('9','0','����','','0','25','10','1','0','9','','1','news_world','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_world','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334497');");
E_D("replace into `phome_enewsclass` values('10','0','ʱ��','','0','25','10','1','0','9','','1','news_fashion','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_fashion','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334518');");
E_D("replace into `phome_enewsclass` values('11','0','����','','0','25','10','1','0','9','','1','news_travel','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_travel','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334539');");
E_D("replace into `phome_enewsclass` values('12','0','̽��','','0','25','10','1','0','9','','1','news_discovery','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_discovery','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334565');");
E_D("replace into `phome_enewsclass` values('13','0','����','','0','25','10','1','0','9','','1','news_baby','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_baby','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334584');");
E_D("replace into `phome_enewsclass` values('14','0','����','','0','25','10','1','0','9','','1','news_regimen','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_regimen','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334604');");
E_D("replace into `phome_enewsclass` values('15','0','����','','0','25','10','1','0','9','','1','news_story','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_story','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334623');");
E_D("replace into `phome_enewsclass` values('16','0','����','','0','25','10','1','0','9','','1','news_essay','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_essay','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334644');");
E_D("replace into `phome_enewsclass` values('17','0','��Ϸ','','0','25','10','1','0','9','','1','news_game','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_game','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334662');");
E_D("replace into `phome_enewsclass` values('18','0','��ʷ','','0','25','10','1','0','9','','1','news_history','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_history','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334684');");
E_D("replace into `phome_enewsclass` values('19','0','��ʳ','','0','25','10','1','0','9','','1','news_food','.html','Ym','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','news_food','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','0','','0','0','0','','0','0','0','0','1459334719');");
E_D("replace into `phome_enewsclass` values('20','0','����(����)','','0','25','10','10','0','9','','1','about','.html','','2','.html','0','1','10','10','10','','0','0','','10','1','1','10','about','1','1','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','1','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','1','0','','0','0','0','1','','0','0','0','','0','0','9','9','1459343983');");

@include("../../inc/footer.php");
?>