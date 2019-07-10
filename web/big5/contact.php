<?php 
ob_start();
include('h.php')?>
<?php if (@$_POST['action']){
	/* Before send the form message, the values could be validated */
	$msg = validation($_POST); /* function on line 24 */
	if (!$msg){
		/* Send mail */
		include "../Mail.php";
		$mail = new Mail();
		$mail->send_from = ' --- Specialists Centre ---';
		$mail->charset= 'UTF-8';
		$mail->subject = '[HK Specialists Ctr]';	
		$mail->contentTitle = $_POST['name'].' contact us';
		/* set the values display from the form */
		$mail->value=array($_POST['t'].' '.$_POST['name'],$_POST['email'],str_replace('\n','<br >',$_POST['tel']),$_POST['fax'],$_POST['message'],);
		/* set the fields display with the above value */
		$mail->field=array("Name","Email","Tel","Fax","Message");
		/* send mail now */
		if ($mail->send())
			header('location:contact.php?msg=1');
		else
			$msg = 'Error is found on send mail, please contact 01Link';
	}
}

/* funciton of validation */
function validation($data){
	if (empty($data['name']))
		return "Please enter your name";
	if (empty($data['tel']))
		return "Please enter valid contact number";
	return 0;
}
?>

<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<style type="text/css">
<!--
.style1 {font-size: 15px}
-->
</style>

<table width="800" height="204" border="0" cellpadding="0" cellspacing="0" style="margin-top:20px;">
        <!--<tr>-->
          <td valign="top"><table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td width="21%" valign="top"><img src="../images/big5/t5.jpg" width="73" height="21" /></td>
              <td width="79%" valign="top"></td>
            </tr>
            <tr>
              <td rowspan="3" valign="top"><br></td>
			  
			  <table border="0" cellpadding="0" cellspacing="0" width="128">
           
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><a href="../images/news1.jpg", target="_blank"></td>
            </tr>
            <tr>
              <td><a href="../images/news2.jpg", target="_blank"></td>
            </tr>
            <tr>
              <td><a href="../images/news3.jpg", target="_blank"></td>
            </tr>
            <tr>
              <td><a href="../images/news4.jpg", target="_blank"></td>
            </tr>
            <tr>
              <td><a href="../images/news5.jpg", target="_blank"></td>
            </tr>
            <tr>
              <td><a href="../images/news6.jpg", target="_blank"></td>
            </tr>
            <tr>
              <td><a href="../images/news7.jpg", target="_blank"></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>            </tr>
          </table></td>
              <td height="94" valign="top"><br>
              <table height="496" border="0" cellpadding="2" cellspacing="0">
                
					



      <tr>
				  <td height="44" colspan="2" valign="top"><span style="font-size: 15px"><strong style="color:#99CC00">尖沙咀1: </strong>
			      </span>
                    <div class="style1" style="margin-left:65px;margin-top:-17px;">尖 沙 咀 北 京 道 裕 華 國 際 大 廈<br />
		          <strong style="color:#f04900">(地鐡 C1 出口, ESprit樓上, 亞士厘道交界)</strong></div></td>
                </tr>


			
				
				<tr>
                  <td height="44" colspan="2" valign="top"><span style="font-size: 15px"><strong style="color:#99CC00">尖沙咀2: </strong>
			      </span>
                    <div class="style1" style="margin-left:65px;margin-top:-17px;">尖 沙 咀 漆 咸 道 57-59 號 金 馬 倫 中 心 6 樓  (特設中國銀行分期付款服務)<br />
		          <strong style="color:#f04900">(尖沙咀地鐵 B2出口)</strong></div></td>
                </tr>
 <!--               
                <tr>
                  <td height="44" colspan="2" valign="top"><span style="font-size: 15px"><strong style="color:#99CC00">尖沙咀3: </strong>
			      </span>
                    <div class="style1" style="margin-left:65px;margin-top:-17px;">尖 沙 咀 廣 東 道 5 號 海 港 城 海 洋 中 心 12 樓 (特設匯豐銀行分期付款服務)<br />
		          <strong style="color:#f04900">(尖沙咀地鐵 L5出口)</strong></div></td>
                </tr>
               
                
                
                
                
                


<tr>
                  <td height="44" colspan="2" valign="top"><span style="font-size: 15px"><strong style="color:#99CC00">佐敦: </strong>
			      </span>
                    <div class="style1" style="margin-left:65px;margin-top:-17px;">佐 敦 道 23 號 新 寶 廣 場 19 樓 (裕華國貨旁)<br />
		          <strong style="color:#f04900">(佐敦地鐵A出口，右轉步行 1分鐘, 萬寧旁扶手電梯上, 康匯診所內)</strong></div></td>
                </tr>



            -->
          
          

<tr>
                  <td height="44" colspan="2" valign="top"><span style="font-size: 15px"><strong style="color:#99CC00">旺角: </strong>
			      </span>
                    <div class="style1" style="margin-left:65px;margin-top:-17px;">旺 角 彌 敦 道 639 號 雅 蘭 中 心 一 期 9 樓 
<br />
		          <strong style="color:#f04900">(旺角地鐵 E1出口)</strong></div></td>
                </tr>



                <tr>
				  <td height="44" colspan="2" valign="top"><div class="style1" style="margin-left:65px;margin-top:-17px;"><br />
				  </div></td>
                </tr>



                <tr>
                  <td colspan="2" valign="top"><span style="font-size: 15px"><strong style="color:#99CC00">電話: </strong>
				  </span>
                    <div class="style1" style="margin-left:60px;margin-top:-13px;">
				  3176 3336</div></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><span style="font-size: 15px"><strong style="color:#99CC00">傳真: </strong>
				  </span>
                    <div class="style1" style="margin-left:60px;margin-top:-13px;">
				  3007 1438</div></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><span style="font-size: 15px"><strong style="color:#99CC00">電郵:</strong>
				  </span>
                    <div class="style1" style="margin-left:60px;margin-top:-13px;">
				  <a href="mailto:postmaster@surgical.hk">postmaster@surgical.hk</a></div></td>
                </tr>
              <!--</table></td></tr>-->
            <tr>
              <td width="581" valign="top">
			  
			  <span class="style1">
			  <!--<form action="e.php" method="post" name="form1" id="form1" onsubmit="MM_validateForm('name','','R','email','','NisEmail','tel','','NisNum','fax','','NisNum');return document.MM_returnValue">-->
			  </span>
			  <form action="" method="post" class="style1" >
			  <input type="hidden" name="action" value="1"  />
                  
            </form>			  </td>
            </tr>
          </table>
         	 </td>
        </tr>
            

    <?php include('f.php')?>
