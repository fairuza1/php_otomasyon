<?php

include("baglanti.php");

$sql_text= " update kullanici set ".
" kul_adi='".$_POST['kad']."', kul_sifre='".$_POST['ksifre']."', kul_durum='".$_POST['kdurum']."', ".
" kul_yetki='".$_POST['kyetki']."' where id=".$_GET['upid'];

mysqli_query($baglanti,$sql_text);
header('location:otomasyon.php?s=kullanici_islemleri');

?>