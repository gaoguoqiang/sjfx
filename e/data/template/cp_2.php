<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?></td>
        </tr>
      </table></td>
</tr>
</table>
<div id="pagelet-company">
				  <div class="company" id="toutiaoCompanyWrapper">
					<span class="J-company-name">&#169; 2016 <?=$public_r['add_sitetitle']?> <?=$public_r['add_siteurl']?></span>
					<a href="http://www.12377.cn/" target="_blank" ga_event="click_about">�й��������ٱ�����</a>
					<a href="http://www.miibeian.gov.cn/" target="_blank" ga_event="click_about"><?=$public_r['add_beian']?></a>
					<a href="/license/" class="icp" target="_blank">�����Ļ���Ӫ���֤</a>
					<a href="/chengnuoshu/" target="_blank">�����������ɹ����ŵ�� </a>
					<span>Υ���Ͳ�����Ϣ�ٱ���<?=$public_r['add_jubao']?></span>
					<span style="display:none"><?=$public_r['add_tj']?> </span>
					
				  </div>

				  
				</div>
<link type="text/css" rel="stylesheet" href="/style/loginbox.css">
<div id="bgDiv" style="display:none;"></div> 

<script type="text/javascript">
var IsMousedown,LEFT,TOP,lggood;
	document.getElementById("Mdown").onmousedown=function(e){

	lggood = document.getElementById("lggoodBox");
	IsMousedown = true;
	e = e||event;
	LEFT = e.clientX - parseInt(lggood.style.left);
	TOP = e.clientY - parseInt(lggood.style.top);
	document.onmousemove = function(e){
		e = e||event;
		if (IsMousedown){
			lggood.style.left = e.clientX - LEFT + "px";
			lggood.style.top = e.clientY - TOP + "px";
		}

	}
	document.onmouseup=function(){
		IsMousedown=false;
	}

}
$(function(){
  $('#loginboxbtn').click(function(){
        $('#bgDiv,#lggoodBox').show();
   });
   
})
</SCRIPT>

</body>
</html>