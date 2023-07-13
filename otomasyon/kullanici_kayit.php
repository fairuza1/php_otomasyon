 <?php
	include("baglanti.php");
//burada ise bu olmalı "insert into tabloadi values(degerleri)"
 $sql_text="insert into kullanici values(NULL,'".$_POST['kad']."','".$_POST['ksifre']."',".$_POST['kyetki'].",".$_POST['kdurum'].")";
// bu kodda şunu yaptık burada vermiş oldugumuz nesne isimlerini veri tabanına aktardık yani burdaki değerlerin veri tabanı isimi ile alakası olmadı unutma ve karıştırma



//sql query =veri tabanı tarafında bir sorgu göndermek ve çalıştırmak için kullanılır
mysqli_query($baglanti,$sql_text);

header('location:otomasyon.php?s=kullanici_islemleri')


?>