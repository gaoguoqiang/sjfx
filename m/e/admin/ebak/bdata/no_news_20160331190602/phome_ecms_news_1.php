<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news`;");
E_C("CREATE TABLE `phome_ecms_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `smalltext` char(255) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  `befrom` char(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=1244 DEFAULT CHARSET=gbk");
E_D("replace into `phome_ecms_news` values('1','20','0','0','0','0','','about','1','admin','0','0','0','0','0','0','0','1459344078','1459345017','1','0','0','','/about/about.html','1','1','1','','关于我们','1459344008','','',' &ldquo;今日头条&rdquo;是一款基于数据挖掘的推荐引擎产品，是国内移动互联网领域成长最快的产品服务之一。&ldquo;今日头条&rdquo;第一个版本于2012年8月上线，截至2016年','0','');");
E_D("replace into `phome_ecms_news` values('2','20','0','0','0','0','','join','1','admin','0','0','0','0','0','0','0','1459345102','1459345102','1','0','0','','/about/join.html','1','1','1','','加入我们','1459345059','','',' &ldquo;今日头条&rdquo;是一款基于数据挖掘的推荐引擎产品，是国内移动互联网领域成长最快的产品服务之一。&ldquo;今日头条&rdquo;第一个版本于2012年8月上线，截至2016年','0','');");
E_D("replace into `phome_ecms_news` values('3','20','0','0','0','0','','report','1','admin','0','0','0','0','0','0','0','1459345175','1459345175','1','0','0','','/about/report.html','1','1','1','','媒体报道','1459345104','','',' 媒体报道','0','');");
E_D("replace into `phome_ecms_news` values('4','20','0','0','0','0','','media_partners','1','admin','0','0','0','0','0','0','0','1459345211','1459345211','1','0','0','','/about/media_partners.html','1','1','1','','媒体合作','1459345178','','',' 今日头条的部分合作媒体伙伴名单，排名不分先后。截止2016年2月，今日头条&ldquo;头条号&rdquo;平台上各类媒体、政府、机构总计超过16000家；签约合作的传统媒体过2000家。','0','');");
E_D("replace into `phome_ecms_news` values('5','20','0','0','0','0','','cooperation','1','admin','0','0','0','0','0','0','0','1459345245','1459345245','1','0','0','','/about/cooperation.html','1','1','1','','产品合作','1459345213','','','  1.高效的流量分发能力今日头条有超过4亿的累积用户群。汇聚各站点的内容，辅以个性化推荐手段，为合作站点带去可观的流量。    网站内容合作收录适用于每天产生大量内容的','0','');");
E_D("replace into `phome_ecms_news` values('6','20','0','0','0','0','','media_cooperation','1','admin','0','0','0','0','0','0','0','1459345279','1459345279','1','0','0','','/about/media_cooperation.html','1','1','1','','合作说明','1459345247','','',' 蜘蛛协议《今日头条》支持蜘蛛协议（Robots Exclusion Protocol）&ldquo;ToutiaoSpider&rdquo;，同时，我们尊重所有的网络媒体，如媒体不希望内容被《今日头条》推荐，请及','0','');");
E_D("replace into `phome_ecms_news` values('7','20','0','0','0','0','','contact','1','admin','0','0','0','0','0','0','0','1459345315','1459345315','1','0','0','','/about/contact.html','1','1','1','','联系我们','1459345281','','','          市场、商务合作请联系邮箱 : bd@toutiao.com    广告合作请联系邮箱 : ad@toutiao.com    广告投放请访问 : http://ad.toutiao.com/e/    媒体合作请联系邮箱 :','0','');");
E_D("replace into `phome_ecms_news` values('8','20','0','0','0','0','','user_agreement','1','admin','0','0','0','0','0','0','0','1459345349','1459345349','1','0','0','','/about/user_agreement.html','1','1','1','','用户协议','1459345317','','',' 本《用户协议》（以下简称&ldquo;本协议&rdquo;）是您(以下也可以&ldquo;用户&rdquo;来指代您)与北京字节跳动科技有限公司(以下简称&ldquo;字节跳动&rdquo;)就使用&ldquo;','0','');");
E_D("replace into `phome_ecms_news` values('9','20','0','0','0','0','','complain','1','admin','0','0','0','0','0','0','0','1459345378','1459345378','1','0','0','','/about/complain.html','1','1','1','','投诉指引','1459345352','','',' &ldquo;今日头条&rdquo;是一款基于数据挖掘技术的推荐引擎产品，它为用户推荐有价值的、个性化的信息，提供连接人与信息的新型服务，是国内移动互联网领域成长最快的产品之','0','');");

@include("../../inc/footer.php");
?>