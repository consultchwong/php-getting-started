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
<table width="800" height="204" border="0" cellpadding="0" cellspacing="0" style="margin-top:20px;">
        <!--<tr>-->
        <tr>
          <td valign="top"><table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td width="21%" valign="top"><img src="../images/t5.gif" width="105" height="21" /></td>
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
              <table height="908" border="0" cellpadding="2" cellspacing="0">
                




        				<tr>
                  <td width="65" height="44" valign="top"><strong style="color:#99CC00">Tsim Sha Tsui 1 : &nbsp;&nbsp;</strong></td>
                  <td width="515" valign="top">Yue Hwa international Building, No. 1 Kowloon Park Drive, Tsim Sha Tsui, Kowloon<br />
                      <strong style="color:#f04900">(Tsim Sha Tsui MTR     &quot;EXIT C1&quot; , Esprit at G/F)</strong></span></td>

                </tr>



						
				
				<tr>
                  <td width="65" height="44" valign="top"><strong style="color:#99CC00">Tsim Sha Tsui 2 : &nbsp;&nbsp;</strong></td>
                  <td width="515" valign="top">6/FL., Cameron Centre, 57-59 Chatham Road, Tsim Sha Tsui, Kowloon (Accept BOC Installment)<br />
                      <strong style="color:#f04900">(Tsim Sha Tsui MTR     B2 EXIT)</strong></span></td>

                </tr>
				

<tr>
                  <td width="65" height="44" valign="top"><strong style="color:#99CC00">Tsim Sha Tsui 3 : &nbsp;&nbsp;</strong></td>
                  <td width="515" valign="top">12/F, Ocean Centre, 5 Canton Road, Tsim Sha Tsui, Kowloon (Accept HSBC Installment)<br />
                      <strong style="color:#f04900">(Tsim Sha Tsui MTR     L5 EXIT)</strong></span></td>

                </tr>


				

				
				<tr>
                  <td width="65" height="44"valign="top"><strong style="color:#99CC00">Jordan : &nbsp;&nbsp;</strong></td>
                  <td width="515" valign="top">19/F., Sino Cheer Plaza, 23 Jordan Road, Kowloon.<br />
                      <strong style="color:#f04900">( Jordan MTR station "EXIT A" )</strong></span></td>
                 
                </tr>
				
				<tr>
                  <td width="65" height="44"valign="top"><strong style="color:#99CC00">Mongkok : &nbsp;&nbsp;</strong></td>
                  <td width="515" valign="top">9/F., One Grand Tower, 639 Nathan Road, Kowloon.<br />
                      <strong style="color:#f04900">( Mongkok MTR station "EXIT E1" )</strong></span></td>
                 
                </tr>
				
				
				
                <tr>
                  <td width="65" height="10" valign="top">&nbsp;</td>
                  <td width="515" valign="top">&nbsp;</td>
                  
                </tr>
				
                <tr>
				<td width="65" height="25"valign="top"><span style="font-size: 15px"><strong style="color:#99CC00"> Tel.: </strong></span></td>
                  <td valign="top">3176 3336</td>
                </tr>
                
                
                <tr>
                  <td width="65" height="25"valign="top"><strong style="color:#99CC00">Fax: </strong></td>
                  <td valign="top">3007 1438</td>
                </tr>
                
                
                <tr>
                  <td width="65" height="25"valign="top"><strong style="color:#99CC00">E-mail:</strong></td>
                  <td valign="top"><a href="mailto:postmaster@surgical.hk">postmaster@surgical.hk</a></td>
                </tr>
              <!--</table></td></tr>-->
            <tr>
              <td colspan="2" valign="top">
			  <form action="" method="post" >
			  <input type="hidden" name="action" value="1"  />
                  
            </form>			  </td>
              <td valign="top">&nbsp;</td>
            </tr>
          </table>
         	 </td>
        </tr>
            

    <?php include('f.php')?>
