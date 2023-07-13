<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="urun_ekle.php">
  <table width="800" border="1" align="center">
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr align="right">
        <td>Ürün Kategorisi:</td>
        <td align="left"><label for="select"></label>
          <select name="ukat" id="select">
			<?php 
			  $sql=mysqli_query($baglanti,"select * from kategori");
				  //veri tabanında olan kategorileri burada seçmesine yardımcı olur ve
				  //yazmış oldugumuz order by u_adi asc komutu ise sıralama yapmaya yarar yani u adina göre sıralama yapacak a dan z ye göre sıralar
				  while($satir=mysqli_fetch_assoc($sql))
				  {
			  ?>
			  
			  <option value="<?php echo $satir['kat_id']; ?>" ><?php echo $satir['kat_adi']; ?></option>
			 
			 <?php } ?>
        </select>        </td>
      </tr>
      <tr align="right">
        <td>Ürün adı:</td>
        <td align="left"><input type="text" name="uad" id="textfield2"></td>
      </tr>
      <tr align="right">
        <td>Ürün adet:</td>
        <td align="left"><input type="text" name="uadet" id="textfield3"></td>
      </tr>
      <tr align="right">
        <td>Ürün fiyat:</td>
        <td align="left"><input type="text" name="ufiyat" id="textfield4"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="left"><input type="submit" name="submit" id="submit" value="Gönder"></td>
      </tr>
    </tbody>
  </table>
</form>
	<p>e </p>
	<table width="800" border="1" align="center">
	  <tbody>
	    <tr>
	      <td>ürün no </td>
	      <td>kategori </td>
	      <td>ürün adı</td>
	      <td>adet</td>
	      <td>fiyat</td>
        </tr>
		  <?php 
		  $sql=mysqli_query($baglanti,"SELECT * FROM urun LEFT JOIN kategori ON urun.u_kat_ıd=kategori.kat_id");
		  while($satir=mysqli_fetch_assoc($sql))
		  {
		  ?>
	    <tr>
	      <td><?php echo $satir['u_id']; ?></td>
	      <td><?php echo $satir['kat_adi']; ?></td>
	      <td><?php echo $satir['u_adi']; ?></td>
	      <td><?php echo $satir['urun_adet']; ?></td>
	      <td><?php echo $satir['urun_fıyat']; ?></td>
        </tr>
		  <?php } ?>
      </tbody>
</table>
	<p>&nbsp;</p>
</body>
</html>