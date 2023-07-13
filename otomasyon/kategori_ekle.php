<?php
include ("baglanti.php");

mysqli_query($baglanti,"insert into kategori  values(NULL,'".$_POST['kadi']."')");




header('location:otomasyon.php?s=kategori');

?>