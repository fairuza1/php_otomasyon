<?php

if($_SESSION['giris']=="basarili")
{?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</had>

<body>
<form id="form1" name="form1" method="post" action="kategori_ekle.php">
  <table width="800" border="1" align="center" >
    <tbody>
      <tr>
        <td colspan="2" align="center" style="font font-size: 32px;color:#F70206;font-weight:600;">kategori ekle</td>
      </tr>
      <tr>
        <td align="right">kategori adı:</td>
        <td><input type="text" name="kadi" id="textfield"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="ekle"></td>
      </tr>
    </tbody>
  </table>
</form>

	<table width="500" border="1" align="center">
	  <tbody>
	    <tr>
	      <td width="180">sıra numarası</td>
	      <td width="306">kategorisi</td>
	      <td width="292">işlemler</td>
        </tr>
		  <?php 
		  $i=0;
		  $sql=mysqli_query($baglanti," select * from kategori ");
		  while($row=mysqli_fetch_assoc($sql))
		  {	$i++;
		  ?>
	    <tr>
	      <td><?php echo $i?></td>
	      <td><?php echo $row['kat_adi']; ?></td>
	      <td>sil/güncelle</td>
        </tr>
		  <?php }?>
      </tbody>
</table>
	<p>&nbsp;</p>
</body>
</html>
  <?php }

else
{
	header('location:index.php');
}
	

?>