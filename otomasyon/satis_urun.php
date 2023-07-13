<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<table width="800" border="1" align="center">
  <tbody>
    <tr>
      <td>ürün.no</td>
      <td>ürün </td>
      <td>seçim</td>
    </tr>
    <?php
	  $tarih=date('y-m-d');
	  echo $tarih;
	  $i=0;
	  $sql=mysqli_query($baglanti,"select * from urun");
	  while($row=mysqli_fetch_assoc($sql))
	  {
		  $i++
		
	   
	  ?>
    <tr>
      <td><?php echo $i  ;?></td>
      <td><?php echo $row['u_adi']; ?></td>
      <td><a href="otomasyon.php?s=satis_adet&mid=<?php echo $_GET['mid'];?>&urnid=<?php echo $row['u_id']; ?>">seç</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html>