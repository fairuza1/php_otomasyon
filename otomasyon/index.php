<?php

if(isset($_GET['hata']) )
//isset fonksiyon değişkenin bir değerinin olup olmadığını kontrol eder
{
	if( $_GET['hata']==1)
	{
		$msg=1;
	}
	else
	{
		$msg=2;
	}
	
}
else
{
	$msg=2;
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="log_kontrol.php">
  <table width="400" border="0" align="center" style="border: 1px solid #000000; ">
	  <?php
	  //border çerçeveyi ayarlıyor
	  // solid =çizgi şeklinde olsun demek
	  // font weight kalınlık anlamına gelir
	  // font size yazı büyüklüğü anlamına gelir
	  ?>
    <tbody>
      <tr>
        <td colspan="2" align="center" style="color: aqua; font-weight:bold;font-size: 16px">yönetim paneli</td>
      </tr>
      <tr>
		  
        <td colspan="2" align="center">
			  <?php if($msg==1) { ?>
			<span style="color: #FC0509;font-size: 10px" > kullanıcı adı veya şifre yanlış</span>
	<?php } ?>
		  </td>
		  	
		  
      </tr>
      <tr>
        <td align="right">kullanıcı adı:</td>
        <td><input type="text" name="kadi" id="textfield"></td>
      </tr>
      <tr>
        <td align="right">şifre:</td>
        <td><input type="password" name="ksifre" id="textfield2"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="giriş"></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>