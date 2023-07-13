<?php


$sql=mysqli_query($baglanti,"select * from kullanici where id=".$_GET['gid']);

while($row=mysqli_fetch_assoc($sql))
{
	
	


?>
<form id="form1" name="form1" method="post" action="kullanici_guncelle_islem.php?upid=<?php echo $_GET['gid'];?>">
  <table width="800" border="1" align="center">
    <tbody>
      <tr>
        <td colspan="2" align="center">kullanıcı bilgileri</td>
      </tr>
      <tr>
        <td align="right">kullanıcı adı:</td>
        <td><input type="text" name="kad" id="textfield" value="<?php echo $row['kul_adi']; ?>"> </td>
      </tr>
      <tr>
        <td align="right">kullanıcı şifre:</td>
        <td><input type="password" name="ksifre" id="textfield2" value="<?php echo $row['kul_sifre'];?>"></td>
      </tr>
      <tr>
        <td align="right">kullanıcı durumu:</td>
        <td><label for="radio">
          <input type="radio" name="kdurum" id="radio" value="1"  <?php if($row['kul_durum']==1) { ?>checked="checked"<?php } ?>>
          Aktif
          <input type="radio" name="kdurum" id="radio2" value="0" <?php if($row['kul_durum']==0) { ?>checked="checked"<?php } ?>>
          Pasif</label></td>
      </tr>
      <tr>
        <td align="right">kullanıcı yetkisi</td>
        <td><input type="radio" name="kyetki" id="radio3" value="1" <?php if($row['kul_yetki']==1) { ?>checked="checked"<?php } ?>>
          Yönetici
          <input type="radio" name="kyetki" id="radio4" value="0"   <?php if($row['kul_yetki']==0) { ?>checked="checked"<?php } ?>>
          kullanıcı</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="güncelle"></td>
      </tr>
    </tbody>
  </table>
</form>
<?php } ?>