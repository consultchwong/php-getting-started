<? 
/*
*	This Template Develope by Lau Kai Tai ( kaitai730@yahoo.com.hk )
*	
*	This is a template included by the Mail class, you could change the font size, color, style
*	you could use class variable with $this->xxx
*/
?>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=<?=$this->charset?>' />	
<title>____NOT_SHOW___</title>	
<style type='text/css'>
<!--	
body , td {	
	font-family:Arial, Helvetica, sans-serif;	
	font-size:12px;	
	}
.style4 {color: #FFFFFF}
-->
</style>
</head>	
<body topmargin='5' bgcolor='#FFFFFF'>	
<table width='550' border='0'  cellpadding='3' cellspacing='1' bgcolor="#333333" bordercolor='#CCCCCC'>
	<tbody>  
	  <tr bgcolor="#FFFFFF">
		<td colspan='2' valign='top' bgcolor="#EEEEEE"><h2><? /* content title */ echo $this->contentTitle; ?></h2></td>
	  </tr>	
	  <? 
	  /* 
	  This is the major part for Form-To-Mail
	  You could modify or delete it anyway and design your template  
	  */
	  for ($i=0,$n=sizeof($this->field);$i<$n;++$i){ ?>
		<tr bgcolor="#FFFFFF">
			<td width='250' valign='top' ><div align='right'><strong><?=$this->field[$i]?></strong></div></td>
			<td width='280' valign='top' ><?=$this->value[$i]?></td>
		</tr>
	<? } /* End */ ?>
	</tbody>
</table>
</body>
</html>