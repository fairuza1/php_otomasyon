<?php 
include("baglanti.php");
 	
mysqli_query($baglanti,"insert into urun values(NULL,'".$_POST['ukat']."','".$_POST['uad']."','".$_POST['uadet']."','".$_POST['ufiyat']."')") or die(mysql_errno()) ;

header('location:otomasyon.php?s=urunler');


?>