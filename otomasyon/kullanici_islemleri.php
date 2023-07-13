<?php

if($_SESSION['giris']=="basarili")
{?>
<form name="form1" method="post" action="kullanici_kayit.php">
  <table width="800" border="1" align="center">
    <tbody>
      <tr>
        <td colspan="2" align="center">kullanıcı bilgileri</td>
      </tr>
      <tr>
        <td align="right">kullanıcı adı:</td>
        <td><input type="text" name="kad" id="textfield"></td>
      </tr>
      <tr>
        <td align="right">kullanıcı şifre:</td>
        <td><input type="text" name="ksifre" id="textfield2"></td>
      </tr>
      <tr>
        <td align="right">kullanıcı durumu:</td>
        <td><label for="radio">
          <input type="radio" name="kdurum" id="radio" value="1">
          Aktif  
          <input type="radio" name="kdurum" id="radio2" value="0">
        Pasif</label></td>
      </tr>
      <tr>
        <td align="right">kullanıcı yetkisi</td>
        <td><input type="radio" name="kyetki" id="radio3" value="1">
          Yönetici 
          <input type="radio" name="kyetki" id="radio4" value="0">
          kullanıcı</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="Gönder"></td>
      </tr>
    </tbody>
  </table>
</form>
<p>
	<table width="800" border="1" align="center">
  <tbody>
    <tr>
      <td width="63">sıra</td>
      <td width="124">kullanıcı adı</td>
      <td width="167">durumu</td>
      <td width="124">yetki</td>
      <td width="288">işlemler</td>
    </tr>
	  <?php 
 $i=0;
	  $sql=mysqli_query($baglanti," select * from kullanici ");
      while ($satir=mysqli_fetch_assoc($sql))
		  //göndermiş olduğumuz querynin yani $sql in  karşılığında olusan  kayıtları bu tarafa çekmeye yarar
	      // mysqli query ile veri tabanına sorgu gönderiyoruz ve bize listelenmesini sağlıyor
		  //fetch assoc alan adları ile ulaşmamızı sağlar
		  // while ise kaç tane kayıt var ise o kadar kayıt oluşturacak
	  {$i++;
		  
	  
	  ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $satir['kul_adi']; // burada ise veri tabanındaki ismi alarak verileri yazdırdık?></td>
      <td>
		  <?php if( $satir['kul_durum']==1)
	  {
		echo "aktif";
		  
	  }
		  else
		  {
			  echo "pasif";
		  }
		  ?>
		</td>
      <td>
		  <?php if( $satir['kul_yetki']==1)
		  {
			  echo "yönetici";
		  }
		  else
		  {
			  echo "kullanıcı";
		  }
		  
		  ?>
		</td>
      <td><a href="kullanici_sil.php?sil_id=<?php echo  $satir['id']; ?>">sil</a>/<a href="otomasyon.php?s=kullanici_guncelle&gid=<?php
	echo $satir['id'];	// burada ise and işareti & soru işareti yerine geldi çünkü 2. ve daha sonraki değişken anlamına gelir ayrıca satır id ide veri tabanından alarak güncelleme yapacak  ?>">güncelle</a></td>
    </tr>
	  <?php } ?>
  </tbody>
</table>
<p>&nbsp;</p>
  
  <?php }

else
{
	header('location:index.php');
}
	

?>
</p>
