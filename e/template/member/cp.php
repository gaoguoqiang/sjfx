<?php
$public_diyr['pagetitle']='��Ա����';
$url="<a href=../../../>��ҳ</a>&nbsp;>&nbsp;<a href=../cp/>��Ա����</a>";
require(ECMS_PATH.'e/template/incfile/header.php');

//ͳ��
//��������
$articleCount=$empire->fetch1("select count(id) as count from {$dbtbpre}ecms_news where userid=$tmgetuserid and ismember=1");
$articleCount=$articleCount['count'];
//��������
$hyCount=$empire->fetch1("select count(*) as count from {$dbtbpre}enewshy where userid=$tmgetuserid");
$hyCount=$hyCount['count'];
//�ռ�����
$spaceclickCount=$empire->fetch1("select viewstats as count from {$dbtbpre}enewsmemberadd where userid=$tmgetuserid");
$spaceclickCount=$spaceclickCount['count'];
//�ۼ��Ķ���
$clickSql=$empire->query("select onclick from {$dbtbpre}ecms_news where userid=$tmgetuserid and ismember=1");
$clickNum=0;
while($click=$empire->fetch($clickSql)){
	$clickNum=$clickNum+$click['onclick'];
}
?>

<body  class="body_index">
    <?php require(ECMS_PATH.'e/template/incfile/top.php');?>
    <div id="scontent">
        
<div class="wrap1 sclearfix">
    <?php require(ECMS_PATH.'e/template/incfile/left.php');?>

    <div class="stage">
        <div class="indexsum">
            <a href="/e/DoInfo/ChangeClass.php?mid=1" class="indexsum_add" ga="�������°�ť$">
                <i></i>
                <span>��������</span>
            </a>
            <div class="indexsum_btns">

                 <a class="indexsum_btn first">
                    <b><?=$articleCount?></b>
                    <span>��������<em title="�ҷ�������������"></em></span>
                </a>
                <a class="indexsum_btn ">
                    <b><?=$hyCount?></b>
                    <span>��������</span>
                </a>



                <a class="indexsum_btn">
                    <b><?=$spaceclickCount?></b>
                    <span>�ռ�����<em title="�ҵĿռ�����"></em></span>
                </a>


                <a class="indexsum_btn last">
                    <b><?=$clickNum?></b>
                    <span>�ۼ��Ķ���</span>
                </a>
            </div>
        </div>
        <div class="indexpage">
            <div class="page_tabs sclearfix">
                <div class="page_tab selected">����</div>
            </div>
            <div class="page_content indexpage_content" gap="����">
                
				<div class="indexpage_item" style="margin-top:-10px;display:none;">
				   <a href="#" target="_blank" ga><img src="http://p3.pstatp.com/origin/3e40006e0d5428fb289" style="display:none;border-radius:4px;" onload="this.style.display='block';" width="750" height="100"></a>
				</div>
                <?php
				//����ɹ����ģ��
				$ggsql=$empire->query("select title,titleurl,newstime from {$dbtbpre}ecms_news where classid=21 order by id desc");
				$no=1;
				while($data=$empire->fetch($ggsql)){
				?>
				<div class="indexpage_item">
					<a href="<?=$data[titleurl]?>" target="_blank"><?=$data[title]?>
					<?php if($no==1){?>
					<span>new</span>
					<?php }?>
					</a>
					<i class="sn"><?=date('Y-m-d',$data[newstime])?></i>
				</div>
				<?php
				$no++;
				}
				?>
				 
            </div>
        </div>
    </div>
    
</div>

    </div>
   <?php require(ECMS_PATH.'e/template/incfile/footer.php');?>


