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
      <td>M.no</td>
      <td>müşteri ad soyad</td>
      <td>seçim</td>
    </tr>
	  <?php 
	  $i=0;
	  $sql=mysqli_query($baglanti,"select * from müsteri");
	  while($row=mysqli_fetch_assoc($sql))
	  {
		  $i++
		  
	   
	  ?>
    <tr>
		
      <td><?php echo $i ;?></td>
      <td><?php echo $row['m_ad']." ".$row['m_soyad']." ".$row['m_firma']; ?></td>
      <td><a href="otomasyon.php?s=satis_urun&mid=<?php echo $row['m_id']; ?>">seç</a></td>
		    
	  </tr>
	  <?php } ?>
  </tbody>
</table>
</body>
</html>