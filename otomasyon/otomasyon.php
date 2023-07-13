 <?php
session_start();

if($_SESSION['giris']=="basarili")
{
	include("baglanti.php");
	
	if(isset($_GET['s']))
	{
		$sayfa=$_GET['s'];
	}
	else
	{
		$sayfa="giris";
	}
	

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<p>&nbsp;</p>
<table width="1000" border="1" align="center">
  <tbody>
    <tr>
      <td><table width="1000" border="1">
        <tbody>
          <tr>
            <td><a href="otomasyon.php">Anasayfa</a></td>
            <td><a href="otomasyon.php?s=kullanici_islemleri">Kullanıcı İşlemleri</a></td>
            <td>Müşteri işlemleri </td>
            <td><a href="otomasyon.php?s=kategori">Kategori İşlemleri</a></td>
            <td><a href="otomasyon.php?s=urunler">Ürün İşlemleri</a></td>
            <td><a href="otomasyon.php?s=satis">Satış İşlemleri</a></td>
            <td><a href="cikis.php">Çıkış</a></td>
            <td>&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>
		  <?php include($sayfa.".php"); //kullanıcı işlemlerine hoşgeldiniz yazar burada ?>
		</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
	
</body>
</html>
<?php
}
else
{
	header('location:index.php');
	
}
?>