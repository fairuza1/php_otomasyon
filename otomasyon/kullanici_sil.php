<?php
include("baglanti.php");


$sql="delete from kullanici where id=".$_GET['sil_id'];
mysqli_query($baglanti,$sql);
header('location:otomasyon.php?s=kullanici_islemleri');

?>