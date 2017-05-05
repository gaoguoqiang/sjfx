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
E_D("replace into `phome_ecms_news` values('1','20','0','0','0','0','','about','1','admin','0','0','0','0','0','0','0','1459344078','1459345017','1','0','0','','/about/about.html','1','1','1','','��������','1459344008','','',' &ldquo;����ͷ��&rdquo;��һ����������ھ���Ƽ������Ʒ���ǹ����ƶ�����������ɳ����Ĳ�Ʒ����֮һ��&ldquo;����ͷ��&rdquo;��һ���汾��2012��8�����ߣ�����2016��','0','');");
E_D("replace into `phome_ecms_news` values('2','20','0','0','0','0','','join','1','admin','0','0','0','0','0','0','0','1459345102','1459345102','1','0','0','','/about/join.html','1','1','1','','��������','1459345059','','',' &ldquo;����ͷ��&rdquo;��һ����������ھ���Ƽ������Ʒ���ǹ����ƶ�����������ɳ����Ĳ�Ʒ����֮һ��&ldquo;����ͷ��&rdquo;��һ���汾��2012��8�����ߣ�����2016��','0','');");
E_D("replace into `phome_ecms_news` values('3','20','0','0','0','0','','report','1','admin','0','0','0','0','0','0','0','1459345175','1459345175','1','0','0','','/about/report.html','1','1','1','','ý�屨��','1459345104','','',' ý�屨��','0','');");
E_D("replace into `phome_ecms_news` values('4','20','0','0','0','0','','media_partners','1','admin','0','0','0','0','0','0','0','1459345211','1459345211','1','0','0','','/about/media_partners.html','1','1','1','','ý�����','1459345178','','',' ����ͷ���Ĳ��ֺ���ý�������������������Ⱥ󡣽�ֹ2016��2�£�����ͷ��&ldquo;ͷ����&rdquo;ƽ̨�ϸ���ý�塢�����������ܼƳ���16000�ң�ǩԼ�����Ĵ�ͳý���2000�ҡ�','0','');");
E_D("replace into `phome_ecms_news` values('5','20','0','0','0','0','','cooperation','1','admin','0','0','0','0','0','0','0','1459345245','1459345245','1','0','0','','/about/cooperation.html','1','1','1','','��Ʒ����','1459345213','','','  1.��Ч�������ַ���������ͷ���г���4�ڵ��ۻ��û�Ⱥ����۸�վ������ݣ����Ը��Ի��Ƽ��ֶΣ�Ϊ����վ���ȥ�ɹ۵�������    ��վ���ݺ�����¼������ÿ������������ݵ�','0','');");
E_D("replace into `phome_ecms_news` values('6','20','0','0','0','0','','media_cooperation','1','admin','0','0','0','0','0','0','0','1459345279','1459345279','1','0','0','','/about/media_cooperation.html','1','1','1','','����˵��','1459345247','','',' ֩��Э�顶����ͷ����֧��֩��Э�飨Robots Exclusion Protocol��&ldquo;ToutiaoSpider&rdquo;��ͬʱ�������������е�����ý�壬��ý�岻ϣ�����ݱ�������ͷ�����Ƽ����뼰','0','');");
E_D("replace into `phome_ecms_news` values('7','20','0','0','0','0','','contact','1','admin','0','0','0','0','0','0','0','1459345315','1459345315','1','0','0','','/about/contact.html','1','1','1','','��ϵ����','1459345281','','','          �г��������������ϵ���� : bd@toutiao.com    ����������ϵ���� : ad@toutiao.com    ���Ͷ������� : http://ad.toutiao.com/e/    ý���������ϵ���� :','0','');");
E_D("replace into `phome_ecms_news` values('8','20','0','0','0','0','','user_agreement','1','admin','0','0','0','0','0','0','0','1459345349','1459345349','1','0','0','','/about/user_agreement.html','1','1','1','','�û�Э��','1459345317','','',' �����û�Э�顷�����¼��&ldquo;��Э��&rdquo;������(����Ҳ����&ldquo;�û�&rdquo;��ָ����)�뱱���ֽ������Ƽ����޹�˾(���¼��&ldquo;�ֽ�����&rdquo;)��ʹ��&ldquo;','0','');");
E_D("replace into `phome_ecms_news` values('9','20','0','0','0','0','','complain','1','admin','0','0','0','0','0','0','0','1459345378','1459345378','1','0','0','','/about/complain.html','1','1','1','','Ͷ��ָ��','1459345352','','',' &ldquo;����ͷ��&rdquo;��һ����������ھ������Ƽ������Ʒ����Ϊ�û��Ƽ��м�ֵ�ġ����Ի�����Ϣ���ṩ����������Ϣ�����ͷ����ǹ����ƶ�����������ɳ����Ĳ�Ʒ֮','0','');");

@include("../../inc/footer.php");
?>